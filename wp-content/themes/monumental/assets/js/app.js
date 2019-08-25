$(document).ready(function() {
    var lFollowX = 0,
        lFollowY = 0,
        x = 0,
        y = 0,
        friction = 1 / 80;

    function moveBackground() {
        x += (lFollowX - x) * friction;
        y += (lFollowY - y) * friction;

        translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

        $('.left-part').css({
            '-webit-transform': translate,
            '-moz-transform': translate,
            'transform': translate
        });

        window.requestAnimationFrame(moveBackground);
    }

    $(window).on('mousemove click', function(e) {

        var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
        var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
        lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
        lFollowY = (10 * lMouseY) / 100;

    });

    moveBackground();

    jQuery('.newsletter-popin').click(function(event){
        event.preventDefault();
        $('.popin-newsletter').fadeIn();
    });

    jQuery('.close-popin').click(function(event){
        event.preventDefault();
        $('.popin-newsletter').fadeOut();
    });

    jQuery('.has_video').click(function(){
        var el = $(this);

        if(el.hasClass('is-play')){
            return;
        }else {

            var videoID = el.data('video');

            var iframeVideo = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + videoID + '?controls=0&autoplay=true" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

            el.append(iframeVideo);

            el.addClass('is-play');

        }
    });

    $('.menu-burger').click(function(){
        $('.navigation-principal').toggleClass('is-open');
    });

});


$(window).on('load', function(){
    //$('.loader').fadeOut();

    $('.loader').fadeOut();


	var img = 0;

	setInterval(function(){
		jQuery('.item-galerie:nth-child(' + img + ') img').addClass('is-visible');

		img ++;
	}, 100);
});
