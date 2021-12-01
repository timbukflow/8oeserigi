$(document).ready(function () {

    setTimeout(function(){$('#loader').fadeOut(800)},800);

    // nav //

    $(".menu").click(function(){
        $(".navcontainer").toggleClass('menufade');
        $("li").toggleClass('menulifade');
    });

    $(".menu").mouseleave(function(){
        $(".menu").removeClass('menufade');
    });

    // plan

    $(".planb").click(function(){
        $('.plan').fadeToggle("planhover");
    });

    $(".planb").hover(function() {
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
        var totoggle = $(this).attr("data-toggle");
        $(totoggle).slideToggle(500);
        $(totoggle).next().hide();

        if ($(totoggle).is(":visible")) {
            $('html,body').animate({scrollTop:$(totoggle).offset().top}, 1000);
        }
    });

});
