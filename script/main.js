$(function(){
	//button1の制御
	$('.button1 a').on('mouseover',function(){
		$(this).stop().animate({
			backgroundColor:'#3CA89F',
			borderColor:'#FFF',
			color:'#FFF'
		},500
		);
	}).on('mouseout',function(){
		$(this).stop().animate({
			backgroundColor:'transparent',
			borderColor:'transparent',
			color:'#01044E'
		},500
		);
	});
	//button2の制御
	$('.button2 a').on('mouseover',function(){
		$(this).stop().animate({
			backgroundColor:'#00CCFF',
			borderColor:'#FFF',
			color:'#FFF'
		},500
		);
	}).on('mouseout',function(){
		$(this).stop().animate({
			backgroundColor:'transparent',
			borderColor:'#FFF',
			color:'#FFF'
		},500
		);
	});
});