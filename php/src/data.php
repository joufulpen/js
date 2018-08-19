<?php

    /*
        数据类型：
            * String
                * 建议双引号
            * Number
                * Int
                * Float
            * Boolean
                * true
                * false
            * Array（数组）**
                * 值数组（带索引，类似于js中的数组）
                * 关联数组（类似于js中的对象）
            * Object（对象）**
                * 类     （类似与js中的构造函数）
            NULL（空值）

        * 并置: . （类似于js中的拼接）
        
        * 变量
            * 作用域
                * 全局作用域：全局变量
                * 局部作用域：局部变量
        * 函数

        * 注意事项：
            * 每行结束必须使用分号
     */
    
    $myname = 'laoxie';

    echo '大家好，我叫' . $myname . '<br/>';

    echo "hello, my name is $myname <br>";

    echo "666";
    echo "<br><br><br>";


    $num1 = 10;

    // 函数定义
    function show($num){
        /*
            在函数中使用全局变量
                * $GLOBALS[]
                * global 关键字
         */

        // echo $num + $num1;
        // echo $num + $GLOBALS['num1'];


        global $num1;

        echo "global结果为：" . ($num + $num1);
    }


    // 执行
    show(100)
?>