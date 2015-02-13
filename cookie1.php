<?php
/**
 * Created by PhpStorm.
 * User: NakOhs
 * Date: 2015-02-14
 * Time: 오전 12:37
 */
    $a=setcookie("userid", "root");
    $b=setcookie("username","kim",time()+60);

    if($a and $b)
    {
        echo "쿠키 'userid'와 'username' 생성 완료!<br>";
        echo "쿠키 'username'은 60초간 지속!";
    }
?>