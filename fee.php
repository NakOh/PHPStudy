<?php
/**
 * Created by PhpStorm.
 * User: NakOh
 * Date: 2015-02-06
 * Time: 오전 12:09
 */
$child = 5000;
$adult = 8000;
$num1 = 3;
$num2 = 2;

$total = $child * $num1 +$adult * $num2;

echo "청소년 입장료: $child 원<br>";
echo "성인 입장료: $adult 원<br>";
echo "청소년: $num1 매, 성인: $num2 매<br>";
echo "전체 입장료: $total 원";
//변수 뒤에 띠어쓰기로 구분된다. 구분하고 싶다면 중괄호로 변수를 감싼다.
echo "청소년 입장료: {$child}원<br>";
?>