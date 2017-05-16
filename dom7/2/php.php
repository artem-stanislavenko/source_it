<?php

if(!empty($_POST['asc'])&&!empty($_POST['answer'])&&!empty($_POST['sorting'])){
$asc=$_POST['asc'];
$answer=$_POST['answer'];
$sorting=$_POST['sorting'];
		$list = array ($asc, $answer, $sorting);
		$fp = fopen("file.csv", "a");
    	fputcsv($fp, $list);
		fclose($fp);
header('Location: http://dom7/2/index.php', false);
}
?>