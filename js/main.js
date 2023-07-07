$(document).ready(function () {

    // nav //

    $(".menu").click(function(){
        $(".navcontainer").toggleClass('menufade');
        $("li").toggleClass('menulifade');
        $("body").toggleClass('navscroll');
    });

    $(".menu").mouseleave(function(){
        $(".menu").removeClass('menufade');
    });

    // plan

    $(".planb").click(function(){
        $('.plan').fadeToggle("planhover");
    });

    $(".phfade").hover(function() {
       $('.hausimg').toggleClass('planfade');
    });

    // accordion

     $('.accTitle').click(function() {

        $accCross = $(this).children('img');
        $('.accCross').not($accCross).removeClass('accX');
        $(this).children('img').toggleClass('accX');

        $accContent = $(this).next('.accList');
        $('.accList').not($accContent).slideUp(400);
        $accContent.stop(true, false).slideToggle(400);
    });

    // impressum //
    $('.impressum').click(function() {
        var $target = $($(this).data("target"));
        $target.slideToggle(500, function() {
            if ($target.is(":visible")) {
                $('html,body').animate({scrollTop: $target.offset().top}, 1000);
            }
        });
    });

    // Banner //
    
    $("#closeButton").click(function() {
        $("#banner").toggleClass("opened");
        $(".iconx").toggleClass("rotate");
    });

    // Preise hover //

    $('.info-btn').hover(function() {
      var targetId = $(this).data('target');
      $('#' + targetId).stop().fadeToggle();
    });
    
});
