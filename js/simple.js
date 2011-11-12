jQuery(document).ready(function() {
  $('#rss_icon').mouseover(function() {
    var src = $('#rss_hover_icon').attr('src');
    $(this).fadeOut(1, function() {
      $(this).attr('src', src);
      $(this).fadeIn();
    });
  });
  $('#rss_icon').mouseleave(function() {
    var src = $('#rss_default_icon').attr('src');
    $(this).fadeOut(1, function() {
      $(this).attr('src', src);
      $(this).fadeIn();
    });
  });
  $('#twitter_icon').mouseover(function() {
    var src = $('#twitter_hover_icon').attr('src');
    $(this).fadeOut(1, function() {
      $(this).attr('src', src);
      $(this).fadeIn();
    });
  });
  $('#twitter_icon').mouseleave(function() {
    var src = $('#twitter_default_icon').attr('src');
    $(this).fadeOut(1, function() {
      $(this).attr('src', src);
      $(this).fadeIn();
    });
  });
  $('#facebook_icon').mouseover(function() {
    var src = $('#facebook_hover_icon').attr('src');
    $(this).fadeOut(1, function() {
      $(this).attr('src', src);
      $(this).fadeIn();
    });
  });
  $('#facebook_icon').mouseleave(function() {
    var src = $('#facebook_default_icon').attr('src');
    $(this).fadeOut(1, function() {
      $(this).attr('src', src);
      $(this).fadeIn();
    });
  });
})
