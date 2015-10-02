$(document).ready(function() {
	$('.novo-sub-menu').css('display','block');
	$('.novo-categoriamenu ').each(function() {
		$(this).hover(function() {
			$('.novo-sub-menu').css('visibility','hidden');
			$(this).find('div:first').css('visibility','visible');
			$(this).find('div:first').hover(function(){
				$(this).css('visibility','visible');
			},function(){
				$(this).css('visibility','hidden');	
			});
		},function(){
			$('.novo-sub-menu').css('visibility','hidden');
		});
	});
	
 });