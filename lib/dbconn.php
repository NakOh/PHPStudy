<?
    $connect=mysql_connect( "localhost", "kdhong", "1234") or  
        die( "SQL server에 연결할수가 없습니다.");

    mysql_select_db("kdhong_db",$connect);
?>
