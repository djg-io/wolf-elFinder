$(function(){
	if ($("#elfinder-plugin").length > 0) {
		$("#elfinder-plugin a").click(function(e){
			e.preventDefault();		
			window.open($(this).attr('href'), null, 'width=750,height=530');
		});
	}
});
