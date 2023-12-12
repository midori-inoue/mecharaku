if (matchMedia('only screen and (max-width: 768px)').matches) {
//スマホ・タブレットの時の処理
$(function() {
	var navBox = $("#topmenu");
		navBox.hide();
			var TargetPos = 550;
			$(window).scroll( function() {
			var ScrollPos = $(window).scrollTop();
			if( ScrollPos > TargetPos ) {
				navBox.fadeIn();
			}
		else {
		navBox.fadeOut();
		}
	});
});
}else{
//PCの時の処理
$(function() {
	var navBox = $("#topmenu");
		navBox.hide();
			var TargetPos = 900;
			$(window).scroll( function() {
			var ScrollPos = $(window).scrollTop();
			if( ScrollPos > TargetPos ) {
				navBox.fadeIn();
			}
		else {
		navBox.fadeOut();
		}
	});
});
}
// JavaScript Document