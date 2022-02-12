<?php

$p_date_time = $_POST['p_date_time'];
$d_date_time = $_POST['d_date_time'];
$price_unit = $_POST['price_unit'];

$time1 = strtotime($p_date_time);
$time2 = strtotime($d_date_time);
$difference = round(abs($time2 - $time1) / 3600,2);

$total_cost = $difference*$price_unit;

echo $difference.'||'.$total_cost;
?>