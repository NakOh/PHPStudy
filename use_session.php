<?
session_start();

$id=$_SESSION['userid'];
$name=$_SESSION['username'];
$time = date('Y-m-d(H:i:s)', $time);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
</head>
<body>
<h3>등록된 세션 사용</h3>
<table width="400" border="1">
    <tr><td>아이디</td><td>이름</td><td>현재 시각</td></tr>
    <tr>
        <td><?=$userid ?></td>
        <td><?=$username ?></td>
        <td><?=$time ?></td>
    </tr>
</table>
</body>
</html>
