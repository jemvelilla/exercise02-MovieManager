$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 100) {
    	$('.top').hide();
    	$('.icon').css("opacity", 1);
    }
    else {
        $('.top').show();
        $('.icon').css("opacity", 0);
    }
});


//fade  icon
$(window).scroll(function(){
	
	$(".top").css("opacity", 0 - $(window).scrollTop() / 250);
	$(".top").css("opacity", 1 - $(window).scrollTop() / 250);
});
