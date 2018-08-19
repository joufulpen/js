require.config({
	// baseUrl:
	paths:{
		'jquery':'../lib/jquery-3.2.1',
		'jqueryui':'../lib/jquery-ui-1.12.1/jquery-ui'
	},

	// 设置依赖关系
	shim:{
		// 'common':{
		// 	deps:['jquery'],
		// 	exports:'randomNumber'
		// },
		'jqueryui':{
			deps: ["jquery"],
			exports:'jQuery.fn.resizable'
		}
	}
});