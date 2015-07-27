define(['jquery','prettify'],function($){
	$('.naviconBtn').on('click',function(){
		$('.nav').slideToggle(100);
	});

	$("pre").addClass("prettyprint linenums");
	prettyPrint();
});
