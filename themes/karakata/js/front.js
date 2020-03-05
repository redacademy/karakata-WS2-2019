(function($) {
      function isScrolledIntoView(elem)
      {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(elem).height();
      return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom) );
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
                  $('#arrow-down').text('⟰');
            } else if(isScrolledIntoView('#6')){
                  console.log(isScrolledIntoView('#6'));
                  window.location.href = "#1";
                  $('#arrow-down').text('⟱'); 
            }  
      });
      $(window).scroll(function(){
            if($(this).scrollTop()>$('#6').offset().top){
                        alert('hi')
                        $('#arrow-down').text('⟰'); 
                  } 

      });
            

})( jQuery );

