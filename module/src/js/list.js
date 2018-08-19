// 编写列表页的js代码

require(['config'],function(){
	require(['jquery','carousel','jqueryui','common'],function($,car,ui,com){
		$('#list li').eq(0).css('font-size',32)
		$('#box').draggable();
		$('#box').resizable();

		console.log(ui);
		console.log(com.ran(100,999));
	})
})