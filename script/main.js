$(function(){
	//button1の制御
	$('.button1 a').on('mouseover',function(){
		$(this).stop().animate({
			backgroundColor:'#00CCFF',
			borderColor:'#FFF',
			color:'#FFF'
		},500
		);
	}).on('mouseout',function(){
		$(this).stop().animate({
			backgroundColor:'transparent',
			borderColor:'#01044E',
			color:'#01044E'
		},500
		);
	});
});