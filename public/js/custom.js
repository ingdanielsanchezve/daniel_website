$(function() {
    $('.progress-bar').each(function() { // loops through all bars
      var percent_fill = $(this).attr('data-appear-progress-animation'); // grabs the % from your html aria-valuenow attribute.               
      $(this).animate({ width: percent_fill }, { duration: 2000 }); //animates. Here is where you could pass additional easing function if desired with the help of jquery ui
    });
  });