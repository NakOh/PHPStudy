<html>
<head>
    <meta http-equiv="Content=Type" content = "text/html; charset=euc-kr" />

</head>
<body>
<h2> 회원 가입</h2>
<form name="mem_form" method="post" action = "mem_print.php">
    <input type="hidden" name="title" value = "회원가입 양식">
    <table border="1" width="640" cellspacing="1" cellpadding="4">
        <tr>
            <td align="right">* 아이디 :</td>
            <td><input type="text" size="15" maxlength="12" name="id" value="guest"> </td>
        </tr>
        <tr>
            <td align="right">* 이름 :</td>
            <td><input type="text" size="15" maxlength="12" name="name"> </td>
        </tr>
        <tr>
            <td align="right">* 비밀번호 :</td>
            <td><input type="password" size="15" maxlength="12" name = "passwd_confirm"> </td>
        </tr>
    <tr><td align="center">
            <input type="submit" value="확인">
            <input type="reset" value="다시작성">
        </td></tr>
    </table>
</form>
</body>
</html>
