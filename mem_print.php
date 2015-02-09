<meta http-equiv="Content=Type" content = "text/html; charset=euc-kr" />
<?
/**
 * Created by PhpStorm.
 * User: NakOhs
 * Date: 2015-02-09
 * Time: 오후 11:31
 */
    $id=$_POST[id];
    $name=$_POST[name];
    $title=$_POST[title];
    echo "아이디: $id<br>";
    echo "이름: $name<br>";
    echo "제목(hidden 타입에서 전달): $title<br>";
?>