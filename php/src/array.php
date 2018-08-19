<?php 
    /*
    	类型
			* 数值数组 - 带有数字索引值的数组（js中的数组）
			* 关联数组 - 带有指定的键的数组，每个键关联一个值(键值对。js中的对象)
			* 多维数组 - 包含一个或多个数组的数组

		定义：


		输出：
			* echo 字符串	速度最快
			* print_r()		中庸
			* var_dump()	最详细

		json字符串
			* json_encode()	把数组转成字符串

     */
    
    // 数值数组（特点：索引值）
    $arr = array('laoxie',18,'lemon',32.5,'小甜甜',17,'xiaoxie',28);

    // echo $arr;
    // print_r($arr);

    var_dump($arr);

    echo json_encode($arr,JSON_UNESCAPED_UNICODE);


    // 关联数组（特点：键值对）
    $person = array(
    	'name'=>'laoxie',
    	'age'=>18,
    	'gender'=>'男'
    );

    var_dump($person);
     echo json_encode($person,JSON_UNESCAPED_UNICODE);
?>