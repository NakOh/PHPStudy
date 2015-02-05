<?php
/**
 * Created by PhpStorm.
 * User: NakOh
 * Date: 2015-02-06
 * Time: 오전 12:25
 */
    $age = 68;
    $fee="2,000원";

    if($age>=65)
    {
        $fee="무료";
    }

    echo "나이: $age 세, 지하철 요금: $fee";
?>