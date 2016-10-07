$(function () {
    $('.ancla').click(function(e){
    	e.preventDefault();
    	$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
    });
    $('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
	$(window).scroll(function(){
        var body = document.body;
        var html = document.documentElement;
        var height = Math.max( body.scrollHeight, body.offsetHeight,html.clientHeight, html.scrollHeight, html.offsetHeight );
		if( $(this).scrollTop() > 0 && $(this).scrollTop() < height-800){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
});
