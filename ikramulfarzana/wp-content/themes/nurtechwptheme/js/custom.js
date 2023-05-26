
  

jQuery(document).ready(function($){
    
 

 

/*  jQuery('.home-slider').bxSlider({
     auto: true,
     mode:'fade',
     controls: true
     });*/


    jQuery('.home-slider').bxSlider({
        auto: true,
        autoControls: true,
        speed: 500
    });
 

    jQuery(".hover-button").mouseleave(
        function () {
            jQuery(this).removeClass("hover-button");
        }
      );

      jQuery('.navbar a.dropdown-toggle ').live('click', function(e){
        location.href = this.href;
        e.preventDefault();
    });




});

// document.getElementById(".navbar a.dropdown-toggle").addEventListener("click", function(event){
//     e.preventDefault();
//     location.href = this.href;
//   });



 

 

 
