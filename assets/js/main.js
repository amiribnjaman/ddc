//-------------Humberger menu
function myAnimate(x){
 x.classList.toggle("animate");
}

 $('document').ready(function(){
	$('#menu').click(function(){
		$('.navbar ul').toggle(500, function(){
			$('#main_nav').scroll(function(){
				$('.navbar ul').hide();
			});
		});
	});
});

// $('.nav_button').click(function(){
// 	$('#main_nav').toggle();
// });

// $('.nav_button').click(function(){
// 	$('#main_nav').css({'position':'fixed','top':'0px'});
// 		$('.nav_button').click(function(){
// 			$('#main_nav').css({'position':'fixed','top':'-62px'});
// 			return true;
// 	});
// });

// $('.nav_button').click(function(){
// 	$('#main_nav').toggle();
// });
