$(document).ready(function() {
  function scrollToId(idName){
    $("html, body").animate({ scrollTop: $(idName).offset().top - 50 }, 1000);

    if(window.location.hash) {
      var hashTag = window.location.hash;
      scrollToId(hashTag);
   	}
  }
  $(".btn-scrolldown").on("click", function(e){
    e.preventDefault();
    var anchorID = $(this).attr("href").substring($(this).attr("href").indexOf('#'));;
    scrollToId(anchorID)
    return false;
  });

  $('.navbar-menu').on('click', function(e) {
    $('.fullscreen-nav').toggle();
    e.preventDefault();
    return false;
  });
});
