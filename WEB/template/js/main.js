

$(function() {
	$('.sl').slick({
		autoplay: true,
		dots:true,
		arrows:false,
		fade: true,
	});

	$('.active').on('click',function(){
		$(this).css('color','#545454');
	});

	$('.header-burger').click(function (event) {
		$('.header-burger, .header-menu').toggleClass('active');
		$('body').toggleClass('lock');
	})
});