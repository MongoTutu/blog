require.config({
	paths : {
		'jquery' : '//cdn.bootcss.com/jquery/2.1.4/jquery.min',
		'prettify' : '../prettify/prettify',
		'app' : 'app',
	},
	urlArgs: "bust=" +  (new Date()).getTime(),
});

require(['jquery','app'],function($,app){
	
});
