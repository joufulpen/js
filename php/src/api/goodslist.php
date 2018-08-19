<?php
	/*
		数据接口(api）：
		
		商品列表
			* 往前端输出数据: [{name,price,color..},{},{}]

		数组的遍历
			* for循环		数值数组
			* forEach...as 	关联数组
		

		数组的操作
			* 往数组中写入数组元素
				* $goodslist[$i] 往$i的位置写入
				* $goodslist[]	往数组最后写入

		分页：
			page 	index
			1		0
			2		20
			3		40
			推导公式：index = (page-1)*qty
		获取前端传参数
			* $_GET[]
			* $_POST[]
			
			* isset()	是否存在，返回boolean
	 */
	// 三元运算避免报错
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$qty = isset($_GET['qty']) ? $_GET['qty'] : 20;
	
	
	$price = array(998,888,666,98.99,48.89,10086,110);
	$color = array('黑色','红色','土豪金','绿色','灰色','玫瑰金');
	
	// 创建数值数组
	$goodslist = array();

	for($i=0;$i<500;$i++){
		$imgNum = $i%77;
		// 创建关联数组
		$goods = array(
			'id' => 'g'.$i,
			'name' => '畅销商品' . $i,
			'price' => $price[array_rand($price)],
			'imgurl' => "img/$imgNum.jpg",
			'color' => $color[array_rand($color)]
		);

		$goodslist[] = $goods;
	}

	// 根据分页/数量截取不同的数据
	$data = array_slice($goodslist,($page-1)*$qty,$qty);

	// 格式化数据
	$res = array(
		'total' =>count($goodslist),
		'page' => $page*1,
		'qty' => $qty*1,
		'data' => $data
	);

	echo json_encode($res,JSON_UNESCAPED_UNICODE);

?>