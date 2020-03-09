(function($) {

    $(document).ready(function() {
    
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

            playSong: function() {
                    $('#audioPlayer')[0].src = this.songURL[this.position];
                    $('.player-title').html(this.songTitle[this.position]);
                    $('#audioPlayer')[0].load();
                    $('#audioPlayer')[0].play();
                    $('.play-container').addClass('stop-container');
                    $('.stop-container').removeClass('play-container');
            },

            pauseSong: function() {
                    $('#audioPlayer')[0].pause();
                    $('.stop-container').addClass('pause-container');
                    $('.pause-container').removeClass('stop-container');
            },

            resumeSong: function() {
                    $('#audioPlayer')[0].play();
                    $('.pause-container').addClass('stop-container');
                    $('.stop-container').removeClass('pause-container');
            },

            nextSong: function() {
                    $('#audioPlayer')[0].pause();
                    
                    if ($('.controls').hasClass('play-container')) {
                        $('.play-container').addClass('stop-container');
                        $('.stop-container').removeClass('play-container');
                    }
                    this.nextSongPos();
                    $('#audioPlayer')[0].src = this.songURL[this.position];
                    $('.player-title').html(this.songTitle[this.position]);
                    $('#audioPlayer')[0].load();
                    $('#audioPlayer')[0].play();
            },

            prevSong: function() {
                    $('#audioPlayer')[0].pause();
                    
                    if ($('.controls').hasClass('play-container')) {
                        $('.play-container').addClass('stop-container');
                        $('.stop-container').removeClass('play-container');
                    }
                    this.prevSongPos();
                    $('#audioPlayer')[0].src = this.songURL[this.position];
                    $('.player-title').html(this.songTitle[this.position]);
                    $('#audioPlayer')[0].load();
                    $('#audioPlayer')[0].play();
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

    });   

})(jQuery);