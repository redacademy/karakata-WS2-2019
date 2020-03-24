(function($) {

    $(document).ready(function() {
    
    /////////////Media Player
    let test2;

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
                elapsedUnformatted: 0,
            },

            test: function () {
                $('#audioPlayer')[0].currentTime = 30;
            },

            count: function() {

                    const test = function () { 

                    if (playlist.songLength.elapsedSeconds <= 58) {
                        playlist.songLength.elapsedSeconds++;
                    }
                    else {
                        playlist.songLength.elapsedSeconds = 0;
                        playlist.songLength.elapsedMinutes++;
                    }
                    playlist.songLength.elapsedUnformatted++
                    playlist.formatted();
                    $('.formatted-minutes').html(playlist.songLength.emFormatted);
                    $('.formatted-seconds').html(playlist.songLength.esFormatted);
                    if (playlist.songLength.total[playlist.position] <= playlist.songLength.elapsedUnformatted) {
                        clearInterval(test2)
                    }
                    console.log(playlist.songLength.elapsedUnformatted)
                }
                test2 = setInterval(test, 1000);

            },

            countReset: function () {
                clearInterval(test2)
                this.songLength.elapsedMinutes = 0;
                this.songLength.elapsedSeconds = 0;
                this.songLength.elapsedUnformatted = 0;
                playlist.formatted();
                $('.formatted-minutes').html(playlist.songLength.emFormatted);
                $('.formatted-seconds').html(playlist.songLength.esFormatted);
            },

            formatted: function() {
                //seconds
                if (playlist.songLength.elapsedSeconds <= 9) {
                    let format = ('0' + playlist.songLength.elapsedSeconds).slice(-2);
                    playlist.songLength.esFormatted = format;
                }
                else {
                    playlist.songLength.esFormatted = playlist.songLength.elapsedSeconds;
                }
                
                //minutes
                if (playlist.songLength.elapsedMinutes <= 9) {
                    let format = ('0' + playlist.songLength.elapsedMinutes).slice(-2);
                    playlist.songLength.emFormatted = format;
                }
                else {
                    playlist.songLength.emFormatted = playlist.songLength.elapsedMinutes;
                }
            },

            displayCurrentSong: function() {
                $('.minutes').html(playlist.songLength.minutes[this.position]);
                $('.seconds').html(playlist.songLength.seconds[this.position]);
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

            changePlayIcon: function () {
                if ($('.controls').hasClass('pause-container')) {
                    $('.pause-container').addClass('stop-container');
                    $('.stop-container').removeClass('pause-container');
                }
                else if ($('.controls').hasClass('play-container')) {
                    $('.play-container').addClass('stop-container');
                    $('.stop-container').removeClass('play-container');
                }
            },

            playSong: function() {
                //plays the currently selected song

                $('#audioPlayer')[0].src = this.songURL[this.position];
                $('.player-title').html(this.songTitle[this.position]);
                $('#audioPlayer')[0].load();
                $('#audioPlayer')[0].play();
                this.changePlayIcon()
                this.listPlaying();
                this.displayCurrentSong();
                clearInterval(test2)
                this.countReset();
                this.count();
            },

            pauseSong: function() {
                //pauses the song
                $('#audioPlayer')[0].pause();
                clearInterval(test2)
                $('.stop-container').addClass('pause-container');
                $('.pause-container').removeClass('stop-container');

                this.listStopped();
            },

            resumeSong: function() {
                //resumes the song 
                $('#audioPlayer')[0].play();
                clearInterval(test2)
                this.count();
                $('.pause-container').addClass('stop-container');
                $('.stop-container').removeClass('pause-container');

                this.listPlaying();
        },

            nextSong: function() {
                //selects and plays next song on the playlist

                $('#audioPlayer')[0].pause();
                this.changePlayIcon()
                this.nextSongPos();
                $('#audioPlayer')[0].src = this.songURL[this.position];
                $('.player-title').html(this.songTitle[this.position]);
                $('#audioPlayer')[0].load();
                this.countReset()
                $('#audioPlayer')[0].play();
                this.count();

                this.listStopped();
                this.listPlaying();
                this.displayCurrentSong();
            },

            prevSong: function() {
                //selects and plays previous song on the playlist

                $('#audioPlayer')[0].pause();                   
                this.changePlayIcon()
                this.prevSongPos();
                $('#audioPlayer')[0].src = this.songURL[this.position];
                $('.player-title').html(this.songTitle[this.position]);
                $('#audioPlayer')[0].load();
                this.countReset()
                $('#audioPlayer')[0].play();
                this.count();

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
                    playlist.songLength.total.push( data.media_details.length );
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

        // $('.progress-bar').on('click', function() {
        //     $('.progress')
        // })
        $('.download-song').on('click', function () {
            console.log('pre-press')
            playlist.test()
            console.log('post-press')
        })

        $('.progress').on('input', function () {
            let scrollingWidth = this.value - 1;
            $('.download-song').html(this.value);
            $('.progress-overlay').css('width', `${scrollingWidth}%`);
        })

        //volume-control

        // $('.volume-control')

        


    });   
})(jQuery);