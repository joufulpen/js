// 按照require.js的规范定义一个模块
// require.js把一个文件当作一个模块
// 要想在引入时的回调函数中得到值,则需return
define(()=>{
	return function(name){
		// console.log(666)
		console.log('hello, my name is ' + name);
	}
});