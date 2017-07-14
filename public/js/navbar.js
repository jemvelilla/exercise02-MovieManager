
$(document).ready(function(){
	$(window).scroll(function() { // check if scroll event happened
		if ($(document).scrollTop() > 30) { // check if user scrolled more than 50 from top of the browser window
			$(".navbar-default").css("background-color", "rgba(0,0,0,0.9)"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
		} else {
			$(".navbar-default").css("background-color", "transparent"); // if not, change it back to transparent
		}
	});
});
