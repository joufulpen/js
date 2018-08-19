// jQuery(function(){
// 	//首页
// })


/*
	require的方法
		* 配置参数：requirejs.config/require.config
		* 加载模块：requirejs/require
		* 定义模块：define
			*
 */

// 在这里加载jquery

// Nodejs同步
// var gulp = requrie('gulp')
// gulp


// require.js
// js无后缀名:基于基础路径
// js文件有后缀:基于所在html文件

require.config({
	// 设置别名(虚拟路径)
	paths:{
		'jquery':'../lib/jquery-3.2.1',
		'jqueryui':'../lib/jquery-ui-1.12.1/jquery-ui',
		'c':'carousel',
	}
});

require(['jquery','c','common'],function($,n,com){
	// 安全使用$
	// 这里的代码在jquery,c,common加载完成后执行:这里的代码依赖jquery,c,common(按需加载)
	console.log($);
	console.log(n);
	console.log(com);

	// n('laoxie');
	// go();


	$('h1').css('color','#f00');
	
})
