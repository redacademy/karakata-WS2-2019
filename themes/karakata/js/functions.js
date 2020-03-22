(function($) {

    $(document).ready(function() {
    
    /////////////Media Player

        let playlist = {
            position: 0,
            songURL: [],
            songTitle: [],
            songLength: {
                minutes: [],
                seconds: [],
            },

            test: function() {
                
                    // console.log(song, pos)
                    // console.log(`this is broken: ${playlist.songLength.minutes[this.position]}`)
                    console.log(playlist.songLength.minutes)
                    console.log(playlist.songLength.minutes.length)
                    console.log(`this is the minutes test: ${playlist.songLength.minutes[0]}`)
                    console.log(`this is the seconds test: ${playlist.songLength.minutes[0]}`)
                    // $(song).html(`${playlist.songLength.minutes[this.position]}:${playlist.songLength.seconds[this.position]}`);
                
            },

            displayCurrentSong: function() {
                $('.minutes').html(playlist.songLength.minutes[this.position])
                $('.seconds').html(playlist.songLength.seconds[this.position])

            },

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
                    this.displayCurrentSong();
                    this.test();
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
                    this.displayCurrentSong();
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
                    this.displayCurrentSong();
            }
        };
        

        //get song duration

        let songDuration = function (id) {

            $.ajax({
                method: 'GET',
                url: functionVars.karakata_url + `wp/v2/media/${id}` ,
                success: function (data) {
                    let songLengthConversion = (data.media_details.length/60);
                    let minutes = Math.floor(songLengthConversion);
                    let slc3 = (songLengthConversion % 1);
                    let seconds = Math.ceil((Math.round(slc3 * 100) /100) * 60);
                    if (minutes < 10) {
                        let num = ('0' + minutes).slice(-2)
                        playlist.songLength.minutes.push( num );
                    }
                    else {
                        playlist.songLength.minutes.push( minutes );
                    }
                    
                    if (seconds < 10) {
                        let num = ('0' + seconds).slice(-2)

                        playlist.songLength.seconds.push( num );                    }
                    else {
                        playlist.songLength.seconds.push( seconds );                    }

                },
    
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', functionVars.karakata_nonce);
                    }
            });
        }
        
        // get playlist from server

        $.ajax({
            method: 'GET',
            url: functionVars.karakata_url + 'acf/v3/beats' ,
            success: function (data) {
                data.forEach((song) => {
                    playlist.songURL.push( song.acf.song.url )
                    playlist.songTitle.push( song.acf.song.title )
                    songDuration( song.acf.song.id )
                })  
            },
            complete: function() {
            },

            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-WP-Nonce', functionVars.karakata_nonce);
                }
        });

        
        playlist.test();

        /// add song length to each song
        // let pos = 0;
        $( window ).load(function() {
            
            $('.song-length').each(function(pos, song) {
                console.log(song, pos)
                console.log(playlist.songLength.minutes)
                console.log(playlist.songLength.minutes.length)
                
                $(song).html(`${playlist.songLength.minutes[0]}:${playlist.songLength.seconds[0]}`);
                // pos++
            })
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

        /// add song length to each song



        /////////////////GALLERY

        $('.wp-block-image').on('click', function () {
            let n = $('.wp-block-image').index(this) + 1;

            if ($('.gallery-grid').find(`figure:nth-child(${n})`).hasClass('fullscreen')) {
                $('.fullscreen').removeClass('fullscreen');
            }
            else if ($('.fullscreen')) {
                $('.fullscreen').removeClass('fullscreen');
                $('.gallery-grid').find(`figure:nth-child(${n})`).addClass('fullscreen');
            }
        });

        /////////////////FARMING

        $('.more-button').on('click', function() {
            
            if ($('.trigger-p').hasClass('hidden')) {
                $('.hidden').removeClass('hidden');
            }
            else {
                $('.trigger-p').addClass('hidden');
            }
        })

        ////////////////more media-player shinanigans desktop-mode engaged

        //progress bar

        $('.progress-bar').on('click', function() {
            $('.progress')
        })

        // time left/total song time

        // $('.playtime')


        //volume-control

        // $('.volume-control')


    });   
})(jQuery);