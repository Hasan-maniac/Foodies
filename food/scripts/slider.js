$(document).ready(function(){
	$('#shower').hide();
	$('h5').click(function(){
		$(this).next().slideToggle(500,function(){
			var test = $(this).next().next().text();
			if(test == ''){
				$('#shower').slideUp('slow');
			}else{
				$(this).next().next().slideUp('slow');
			}
		});
	});
});