<?php
/**
 * Created by PhpStorm.
 * User: NakOh
 * Date: 2015-02-06
 * Time: 오전 12:39
 */
    $a=2;

    echo ("<html><body>
<h3>2단 구구단 표 만들기</h3>
<table border='1' width='100'>");

$b1 = 1;
while($b<=9)
{
    $c=$a*$b;
    echo "<tr><td align='center'>$a x $b = $c</td></tr>";
    $b++;
}
    echo("</table>
</body>
</html>");
?>