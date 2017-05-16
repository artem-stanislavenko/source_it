<?php
$date = "2013-06-17 9:00:00";
$d1 = strtotime($date);
$date2 = date("Y-m-d", $d1);
print_r($date2);