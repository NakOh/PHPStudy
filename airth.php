<?php
/**
 * Created by PhpStorm.
 * User: NakOh
 * Date: 2015-02-06
 * Time: 오전 12:13
 */
    $a=7;
    $b=8;

    $a++;
    $b--;

    $b=$a * $b + 2;

    $c = $a + $b;

    echo "a: $a, b: $b, c : $c<br>";

    $c=$a % $b;

    $b = $a + 2;

    $a = $a * 3;

    echo "a: $a, b: $b, c: $c";

    $n1 = "010";
    $n2 = "2322";
    $n3 = "3223";
    $hp = $n1."-".$n2."-".$n3;
    //변수끼리 연결해서 출력할때는 . 을 붙인다.

    echo "휴대폰 번호 : $hp";
?>