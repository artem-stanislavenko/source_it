<?php
$date = "2017.05.17";
$pattern = "/^[1-9]{1}[0-9]{3}\.[0-9]{2}\.[0-9]{2}$/";
echo preg_match($pattern, $date)."<br>";
print_r($date);