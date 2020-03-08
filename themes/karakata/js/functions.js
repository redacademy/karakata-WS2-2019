(function($) {
    
    let playlist = {
        position: 0,
        songURL: [],
        songTitle: []
    };

//transitions to next song position in list
    let nextSong = function () {
     playlist.position++
     if (playlist.position > playlist.songURL.length - 1) {
         playlist.position = 0
    }
     console.log(playlist.position)
    }
    
// get playlist from server
$(document).ready(function() {

    $.ajax({
        method: 'GET',
        url: functionVars.karakata_url + 'acf/v3/beats' ,
        success: function (data) {
            console.log(data)
            data.forEach((song) => {
                playlist.songURL.push( song.acf.song.url )
                playlist.songTitle.push( song.acf.song.title )
            })
            console.log(playlist)
        },

        beforeSend: function(xhr) {
            xhr.setRequestHeader('X-WP-Nonce', functionVars.karakata_nonce);
            }
    })
});   

// play and pause
    $('.player-controls').on('click', '.play-container',  function() {
        $('#audioPlayer')[0].src = playlist.songURL[playlist.position];
        $('.player-title').html(playlist.songTitle[playlist.position]);
        $('#audioPlayer')[0].load();
        $('#audioPlayer')[0].play();
        $('.play-container').addClass('stop-container')
        $('.stop-container').removeClass('play-container')
    });

    $('.player-controls').on('click', '.stop-container', function() {
        $('#audioPlayer')[0].pause();
        $('.stop-container').addClass('pause-container')
        $('.pause-container').removeClass('stop-container')
    });

    $('.player-controls').on('click', '.pause-container', function() {
        $('#audioPlayer')[0].play();
        $('.pause-container').addClass('stop-container')
        $('.stop-container').removeClass('pause-container')
    });

// next song
    $('.next-container').on('click', function() {
        $('#audioPlayer')[0].pause();
        
        if ($('.controls').hasClass('play-container')) {
            $('.play-container').addClass('stop-container')
            $('.stop-container').removeClass('play-container')
        }
        nextSong();
        $('#audioPlayer')[0].src = playlist.songURL[playlist.position];
        $('.player-title').html(playlist.songTitle[playlist.position]);
        $('#audioPlayer')[0].load();
        $('#audioPlayer')[0].play();

    });

})(jQuery);