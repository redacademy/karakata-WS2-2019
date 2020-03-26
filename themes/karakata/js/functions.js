(function($) {
  $(document).ready(function() {
    /////////////Media Player
    let engageTimer;

    let playlist = {
      position: 0,
      songURL: [],
      songTitle: [],
      songLength: {
        total: [],
        minutes: [],
        seconds: [],
        elapsedMinutes: 0,
        elapsedSeconds: 0,
        emFormatted: 0,
        esFormatted: 0,
        elapsedUnformatted: 0
      },

      volumeupdate: function() {
        //updates volume bar position based on selected volume
        let vWidth = $('.volume').attr('value');
        $('.volume-overlay').css('width', `${vWidth}%`);
      },

      progressSet: function() {
        //sets the progress bars max value to the song length in total seconds
        $('.progress').attr('max', this.songLength.total[this.position]);
      },

      progressWidth: function() {
        //adjusts the progress bar overylay width to match the time elapsed
        let pWidth =
          ($('.progress').attr('value') /
            this.songLength.total[this.position]) *
          100;
        $('.progress-overlay').css('width', `${pWidth}%`);
      },

      count: function() {
        // counts up on the progress timer to show what time your at in the song

        const countInner = function() {
          if (playlist.songLength.elapsedSeconds <= 58) {
            playlist.songLength.elapsedSeconds++;
          } else {
            playlist.songLength.elapsedSeconds = 0;
            playlist.songLength.elapsedMinutes++;
          }
          playlist.songLength.elapsedUnformatted++;
          $('.progress').attr('value', playlist.songLength.elapsedUnformatted);
          playlist.formatted();
          playlist.progressWidth();
          $('.formatted-minutes').html(playlist.songLength.emFormatted);
          $('.formatted-seconds').html(playlist.songLength.esFormatted);
          if (
            playlist.songLength.total[playlist.position] <=
            playlist.songLength.elapsedUnformatted
          ) {
            clearInterval(engageTimer);
            playlist.nextSong();
          }
        };
        engageTimer = setInterval(countInner, 1000);
      },

      countReset: function() {
        //resets the progress timer to 00:00
        clearInterval(engageTimer);
        this.songLength.elapsedMinutes = 0;
        this.songLength.elapsedSeconds = 0;
        this.songLength.elapsedUnformatted = 0;
        playlist.formatted();
        $('.formatted-minutes').html(playlist.songLength.emFormatted);
        $('.formatted-seconds').html(playlist.songLength.esFormatted);
      },

      conversion: function() {
        //converts the time from XXXseconds to XX:XX ie minutes:seconds
        let t1 = this.songLength.elapsedUnformatted / 60;
        let t2 = Math.floor(t1);
        let t3 = t1 % 1;
        let t4 = Math.ceil((Math.round(t3 * 100) / 100) * 60);
        this.songLength.elapsedMinutes = t2;
        this.songLength.elapsedSeconds = t4;
      },

      formatted: function() {
        //formats the time so that it always has 2 numbers ie adds a 0 before single numbers 12:03 or 01:06
        if (playlist.songLength.elapsedSeconds <= 9) {
          let format = ('0' + playlist.songLength.elapsedSeconds).slice(-2);
          playlist.songLength.esFormatted = format;
        } else {
          playlist.songLength.esFormatted = playlist.songLength.elapsedSeconds;
        }

        //minutes
        if (playlist.songLength.elapsedMinutes <= 9) {
          let format = ('0' + playlist.songLength.elapsedMinutes).slice(-2);
          playlist.songLength.emFormatted = format;
        } else {
          playlist.songLength.emFormatted = playlist.songLength.elapsedMinutes;
        }
      },

      displayCurrentSong: function() {
        //displays the current song in the media player
        $('.minutes').html(playlist.songLength.minutes[this.position]);
        $('.seconds').html(playlist.songLength.seconds[this.position]);
      },

      nextSongPos: function() {
        //changes the position var to change which song is loaded
        this.position++;
        if (this.position > this.songURL.length - 1) {
          this.position = 0;
        }
      },

      prevSongPos: function() {
        //changes the position var to change which song is loaded
        if (this.position === 0) {
          this.position = this.songURL.length - 1;
        } else {
          this.position--;
        }
      },

      listPlaying: function() {
        //changes play/pause icon beside the list of songs
        let n = this.position + 1;

        $('.songsList')
          .find(`li:nth-child(${n})`)
          .find('img')
          .addClass('playing');
        $('.songsList')
          .find(`li:nth-child(${n})`)
          .find('img')
          .attr(
            'src',
            `${functionVars.karakata_template_path}/Icons/Pause.svg`
          );
      },

      listStopped: function() {
        //changes play/pause icon beside the list of songs

        if ($('.playing')) {
          $('.playing').attr(
            'src',
            `${functionVars.karakata_template_path}/Icons/Play.svg`
          );
          $('.playing').removeClass('playing');
        }
      },

      changePlayIcon: function() {
        //changes the play/pause icon
        if ($('.controls').hasClass('pause-container')) {
          $('.pause-container').addClass('stop-container');
          $('.stop-container').removeClass('pause-container');
        } else if ($('.controls').hasClass('play-container')) {
          $('.play-container').addClass('stop-container');
          $('.stop-container').removeClass('play-container');
        }
      },

      playSong: function() {
        //plays the currently selected song
        clearInterval(engageTimer);
        $('#audioPlayer')[0].src = this.songURL[this.position];
        $('.player-title').html(this.songTitle[this.position]);
        $('#audioPlayer')[0].load();
        this.countReset();
        this.progressSet();
        this.progressWidth();
        this.count();
        $('#audioPlayer')[0].play();
        this.changePlayIcon();
        this.listPlaying();
        this.displayCurrentSong();
      },

      pauseSong: function() {
        //pauses the song
        clearInterval(engageTimer);
        $('#audioPlayer')[0].pause();
        $('.stop-container').addClass('pause-container');
        $('.pause-container').removeClass('stop-container');

        this.listStopped();
      },

      resumeSong: function() {
        //resumes the song
        clearInterval(engageTimer);
        this.count();
        $('#audioPlayer')[0].play();
        $('.pause-container').addClass('stop-container');
        $('.stop-container').removeClass('pause-container');

        this.listPlaying();
      },

      nextSong: function() {
        //selects and plays next song on the playlist

        $('#audioPlayer')[0].pause();
        this.changePlayIcon();
        this.nextSongPos();
        $('#audioPlayer')[0].src = this.songURL[this.position];
        $('.player-title').html(this.songTitle[this.position]);
        $('#audioPlayer')[0].load();
        this.countReset();
        this.progressSet();
        this.progressWidth();
        this.count();
        $('#audioPlayer')[0].play();
        this.listStopped();
        this.listPlaying();
        this.displayCurrentSong();
      },

      prevSong: function() {
        //selects and plays previous song on the playlist

        $('#audioPlayer')[0].pause();
        this.changePlayIcon();
        this.prevSongPos();
        $('#audioPlayer')[0].src = this.songURL[this.position];
        $('.player-title').html(this.songTitle[this.position]);
        $('#audioPlayer')[0].load();
        this.countReset();
        this.progressSet();
        this.progressWidth();
        this.count();
        $('#audioPlayer')[0].play();
        this.listStopped();
        this.listPlaying();
        this.displayCurrentSong();
      }
    };

    //get song duration

    let songDuration = function(id) {
      $.ajax({
        method: 'GET',
        url: functionVars.karakata_url + `wp/v2/media/${id}`,
        async: false,
        success: function(data) {
          playlist.songLength.total.push(data.media_details.length);
          let songLengthConversion = data.media_details.length / 60;
          let minutes = Math.floor(songLengthConversion);
          let slc3 = songLengthConversion % 1;
          let seconds = Math.ceil((Math.round(slc3 * 100) / 100) * 60);
          if (minutes < 10) {
            let num = ('0' + minutes).slice(-2);
            playlist.songLength.minutes.push(num);
          } else {
            playlist.songLength.minutes.push(minutes);
          }

          if (seconds < 10) {
            let num = ('0' + seconds).slice(-2);

            playlist.songLength.seconds.push(num);
          } else {
            playlist.songLength.seconds.push(seconds);
          }
        },

        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', functionVars.karakata_nonce);
        }
      });
    };

    // get playlist from server

    if (window.location.pathname === '/karakata/music/songs/') {
      $.ajax({
        method: 'GET',
        url: functionVars.karakata_url + 'acf/v3/beats',
        success: function(data) {
          data.forEach(song => {
            playlist.songURL.push(song.acf.song.url);
            playlist.songTitle.push(song.acf.song.title);
            songDuration(song.acf.song.id);
          });
        },
        complete: function() {},

        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', functionVars.karakata_nonce);
        }
      });
    }
    // play

    $('.player-controls').on('click', '.play-container', function() {
      playlist.playSong();
    });

    // pause

    $('.player-controls').on('click', '.stop-container', function() {
      playlist.pauseSong();
    });

    // // resume

    $('.player-controls').on('click', '.pause-container', function() {
      playlist.resumeSong();
    });

    // // next song

    $('.player-controls').on('click', '.next-container', function() {
      playlist.nextSong();
    });

    // // prev song

    $('.player-controls').on('click', '.prev-container', function() {
      playlist.prevSong();
    });

    // plays a song when selected from the list of songs
    $('.playicon').on('click', function() {
      let n = $('.playicon').index(this) + 1;

      playlist.position = $('.playicon').index(this);

      playlist.listStopped();

      $('.songsList')
        .find(`li:nth-child(${n})`)
        .find('img')
        .addClass('playing');
      $('.songsList')
        .find(`li:nth-child(${n})`)
        .find('img')
        .attr('src', `${functionVars.karakata_template_path}/Icons/Pause.svg`);

      playlist.playSong();
    });

    /// add song length to each song

    /////////////////GALLERY

    $('.wp-block-image').on('click', function() {
      let n = $('.wp-block-image').index(this) + 1;

      if (
        $('.gallery-grid')
          .find(`figure:nth-child(${n})`)
          .hasClass('fullscreen')
      ) {
        $('.fullscreen').removeClass('fullscreen');
      } else if ($('.fullscreen')) {
        $('.fullscreen').removeClass('fullscreen');
        $('.gallery-grid')
          .find(`figure:nth-child(${n})`)
          .addClass('fullscreen');
      }
    });

    /////////////////FARMING

    $('.more-button').on('click', function() {
      if ($('.trigger-p').hasClass('hidden')) {
        $('.hidden').removeClass('hidden');
      } else {
        $('.trigger-p').addClass('hidden');
      }
    });

    ////////////////media-player desktop-mode

    //progress bar

    $('.progress').on('input', function() {
      playlist.songLength.elapsedUnformatted = this.value;
      playlist.progressWidth();
      playlist.conversion();
      playlist.formatted();
      $('#audioPlayer')[0].currentTime = playlist.songLength.elapsedUnformatted;
      if ($('#audioPlayer')[0].paused === true) {
        playlist.resumeSong();
      }
    });

    // volume control

    $('.volume').on('input', function() {
      let vset = $('.volume').attr('value') / 100;

      playlist.volumeupdate();
      $('#audioPlayer')[0].volume = vset;
    });
  });
})(jQuery);
