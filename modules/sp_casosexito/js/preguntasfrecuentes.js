
jQuery(document).ready(function ($) {
  var homesliderConfig = {
    speed: 500,            // Integer: Speed of the transition, in milliseconds
    timeout: $('.homesection').data('interval'),          // Integer: Time between slide transitions, in milliseconds
    nav: true,             // Boolean: Show navigation, true or false
    random: false,          // Boolean: Randomize the order of the slides, true or false
    pause: $('.homesection').data('pause'),           // Boolean: Pause on hover, true or false
    maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
    namespace: "homesection",   // String: Change the default namespace used
    before: function(){},   // Function: Before callback
    after: function(){}     // Function: After callback
  };

  $(".rsections").responsiveSlides(homesliderConfig);

});
