
$(function() {
  $('.progress-bar').each(function() {
    var bar_value = $(this).attr('aria-valuenow') + '%';                
    $(this).animate({ width: bar_value }, { duration: 2000, easing: 'linear' });
  });
});

/*taka sama wysokość kolumn*/
var maxHeight = 0;
$('.item').each(function() {
    maxHeight = Math.max(maxHeight, $(this).height());
});
$('.item .thumbnail').css({height:maxHeight+ 2 + 'px'});

