<?php 
    $txt1="你是我的小呀小苹果"; 
    $txt2="怎么爱你都不嫌多"; 

    // echo $txt1 . ", " . $txt2; 

    echo "$txt1 , $txt2 <br/>";

    $str = 'laoxie你好';

    // 获取字符串长度
    // 	* strlen
    // 	* mb_strlen
    // echo strlen($str);
    echo mb_strlen($str);

    echo '<br>';

    // strpos
    $res = strpos("Hello world!","world");//=>6
    echo $res;
?>