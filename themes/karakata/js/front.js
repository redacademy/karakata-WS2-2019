(function($) {
      function isScrolledIntoView(elem)
      {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(elem).height();
      return ((elemBottom >= docViewTop) && (elemTop < docViewBottom) );
      }
      $('#arrow-down').click(function() {    
            console.log(isScrolledIntoView('#1'));
            
            if(isScrolledIntoView('#1')){
                  window.location.href = "#2";
            } else if(isScrolledIntoView('#2')){
                  window.location.href = "#3";
            } else if(isScrolledIntoView('#3')){
                  window.location.href = "#4";
            } else if(isScrolledIntoView('#4')){
                  window.location.href = "#5";
            } else if(isScrolledIntoView('#5')){
                  window.location.href = "#6";
            } else if(isScrolledIntoView('#6')){
                  console.log(isScrolledIntoView('#6'));
                  window.location.href = "#1";
            }  
      });
            
      $('.front-page-main').scroll(function(){
            if(isScrolledIntoView('#6')){
                  $('#arrow-down').addClass( "arrow-up");
            } else{
                  $('#arrow-down').removeClass( "arrow-up"); 

            };
            
            if(isScrolledIntoView('#1')){
                  $('.dot-scroll').html( "•" );
                  $('#s1').html('<i id="selected-page" class="far fa-dot-circle"></i>');
            } else if(isScrolledIntoView('#2')){
                  $('.dot-scroll').html( "•" );
                  $('#s2').html('<i id="selected-page" class="far fa-dot-circle"></i>');
            } else if(isScrolledIntoView('#3')){
                  $('.dot-scroll').html( "•" );
                  $('#s3').html('<i id="selected-page" class="far fa-dot-circle"></i>');
            } else if(isScrolledIntoView('#4')){
                  $('.dot-scroll').html( "•" );
                  $('#s4').html('<i id="selected-page" class="far fa-dot-circle"></i>');
            } else if(isScrolledIntoView('#5')){
                  $('.dot-scroll').html( "•" );
                  $('#s5').html('<i id="selected-page" class="far fa-dot-circle"></i>');
            } else if(isScrolledIntoView('#6')){
                  $('.dot-scroll').html( "•" );
                  $('#s6').html('<i id="selected-page" class="far fa-dot-circle"></i>');
            }  
      });
      if(!localStorage.getItem("visted")){
      $('.start-button').click(function () {
                  $(".first").css("background-color", "black");
                  $(".first").fadeOut(700);
                  setTimeout(() => {
                  $('.second').addClass( "in-position");
                  }, 1000);
                  
            })   
            localStorage.setItem("visted",true);
         }else{
            $(".first").hide();
            $('.second').hide();
            $('#karakata-logo').removeClass( "karakata-logo");


         };
      $(window).click(function() {
            $('.slide-menu').removeClass( "slide-open");
            $('.hamburger').removeClass( "hamburger-open");

            });   
      $('.hamburger').click(function (event) {
            event.stopPropagation();
            $('.slide-menu').addClass( "slide-open");
            $('.hamburger').addClass( "hamburger-open");
            
      }) 
      $('#close-menu').click(function () {
            $('.slide-menu').removeClass( "slide-open");
            $('.hamburger').removeClass( "hamburger-open");
            
      })             
      $('.slide-menu').click(function(event){
          event.stopPropagation();
      });

})( jQuery );

