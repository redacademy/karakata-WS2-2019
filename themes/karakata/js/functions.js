(function($) {

    $(document).ready(function() {
    
    /////////////Media Player

        let playlist = {
            position: 0,
            songURL: [],
            songTitle: [],

            nextSongPos: function() {
                this.position++;
                if (this.position > this.songURL.length - 1) {
                    this.position = 0;
                }
            },

            prevSongPos: function() {
                if (this.position === 0) {
                    this.position = this.songURL.length - 1;
                }
                else {
                    this.position--;
                }
            },
            
            listPlaying: function () {
                //changes play/pause icon beside the list of songs
                let n = this.position + 1;

                $('.songsList').find(`li:nth-child(${n})`).find('img').addClass('playing');
                $('.songsList').find(`li:nth-child(${n})`).find('img').attr('src', `${functionVars.karakata_template_path}/Icons/Pause.svg`);
            },

            listStopped: function () {
                //changes play/pause icon beside the list of songs
                
                if ($('.playing')) {
                    $('.playing').attr('src', `${functionVars.karakata_template_path}/Icons/Play.svg`);
                    $('.playing').removeClass('playing');
                }
            },

            playSong: function() {
                //plays the currently selected song

                    $('#audioPlayer')[0].src = this.songURL[this.position];
                    $('.player-title').html(this.songTitle[this.position]);
                    $('#audioPlayer')[0].load();
                    $('#audioPlayer')[0].play();
                    $('.play-container').addClass('stop-container');
                    $('.stop-container').removeClass('play-container');
                    $('.pause-container').addClass('stop-container');
                    $('.stop-container').removeClass('pause-container');
                    this.listPlaying();
            },

            pauseSong: function() {
                //pauses the song
                    $('#audioPlayer')[0].pause();
                    $('.stop-container').addClass('pause-container');
                    $('.pause-container').removeClass('stop-container');

                    this.listStopped();
            },

            resumeSong: function() {
                //resumes the song 
                    $('#audioPlayer')[0].play();
                    $('.pause-container').addClass('stop-container');
                    $('.stop-container').removeClass('pause-container');

                    this.listPlaying();
            },

            nextSong: function() {
                //selects and plays next song on the playlist

                    $('#audioPlayer')[0].pause();
                    
                    if ($('.controls').hasClass('pause-container')) {
                        $('.pause-container').addClass('stop-container');
                        $('.stop-container').removeClass('pause-container');
                    }
                    this.nextSongPos();
                    $('#audioPlayer')[0].src = this.songURL[this.position];
                    $('.player-title').html(this.songTitle[this.position]);
                    $('#audioPlayer')[0].load();
                    $('#audioPlayer')[0].play();

                    this.listStopped();
                    this.listPlaying();
            },

            prevSong: function() {
                //selects and plays previous song on the playlist

                    $('#audioPlayer')[0].pause();
                    
                    if ($('.controls').hasClass('play-container')) {
                        $('.pause-container').addClass('stop-container');
                        $('.stop-container').removeClass('pause-container');
                    }
                    this.prevSongPos();
                    $('#audioPlayer')[0].src = this.songURL[this.position];
                    $('.player-title').html(this.songTitle[this.position]);
                    $('#audioPlayer')[0].load();
                    $('#audioPlayer')[0].play();

                    this.listStopped();
                    this.listPlaying();
            }
        };
            
        // get playlist from server

        $.ajax({
            method: 'GET',
            url: functionVars.karakata_url + 'acf/v3/beats' ,
            success: function (data) {
                data.forEach((song) => {
                    playlist.songURL.push( song.acf.song.url )
                    playlist.songTitle.push( song.acf.song.title )
                })
            },

            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-WP-Nonce', functionVars.karakata_nonce);
                }
        });

        // play

        $('.player-controls').on('click', '.play-container', function () {
            playlist.playSong()
        });

        // pause
        
        $('.player-controls').on('click', '.stop-container', function () {
            playlist.pauseSong()
        });

        // // resume
        
        $('.player-controls').on('click', '.pause-container', function () {
            playlist.resumeSong()
        });

        // // next song
        
        $('.player-controls').on('click', '.next-container', function () {
            playlist.nextSong()
        });

        // // prev song
        
        $('.player-controls').on('click', '.prev-container', function () {
            playlist.prevSong()
        });

        // plays a song when selected from the list of songs
        $('.playicon').on('click', function () {
            let n = $('.playicon').index(this) + 1;

            playlist.position = $('.playicon').index(this)

            playlist.listStopped();
            
           $('.songsList').find(`li:nth-child(${n})`).find('img').addClass('playing');
           $('.songsList').find(`li:nth-child(${n})`).find('img').attr('src', `${functionVars.karakata_template_path}/Icons/Pause.svg`);

            playlist.playSong();
        });

        /////////////////GALLERY

        $('.wp-block-image').on('click', function () {
            console.log('you freaking clicked it my dude!');
            let n = $('.wp-block-image').index(this) + 1;
            console.log($('.wp-block-image').index(this));

            if ($('.fullscreen')) {
                $('.fullscreen').removeClass('fullscreen');
            }
            $('.gallery-grid').find(`figure:nth-child(${n})`).find('img').addClass('fullscreen');
        });

    });   
})(jQuery);