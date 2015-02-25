<?
session_start();

echo "세션 시작!!!<p>";

$_SESSION['userid'] = "user";
$_SESSION['username']  = "Kim";
$_SESSION['time']    = time();   // time()�� ���� �ð�

echo '세 개의 세션 변수 등록 완료!!!<br>';

echo $_SESSION['userid']."<br>";
echo $_SESSION['username']."<br>";
echo $_SESSION['time']."<br>";
?> 
