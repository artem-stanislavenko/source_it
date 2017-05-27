<?php
function once(){
if(!empty($_REQUEST['number'])&&!empty($_REQUEST['month'])&&!empty($_REQUEST['year'])){
$number=$_REQUEST['number'];
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];
		if($number>31){
			echo "Такого дня не существуе <br>";
		}
		if($month>12){
		echo "Такого месяца не существуе <br>";
		}else{
			$array = array ($number, $month, $year);
			$first_date = implode(".", $array);
			print_r("Введеная дата: $first_date <br>");
			$last_date = date("d.m.Y");
			print_r("Текущая дата: $last_date <br>");
			$difference = intval(abs(
	   		strtotime($first_date) - strtotime($last_date)
			));
			$difference/=(3600 * 24);
			echo "Разница в днях: $difference <br>";
			if($difference>365){
				echo "Слишком большой разрыв между датами: $difference дней!";
			}else{
				$new=date('H.i.s d.m.Y');
				echo "Время и дата выполения скрипта: $new <br> Случайные даты в интервале от $first_date до $last_date:<br>";
				for($i=0; $i<5; $i++) {
				$start = mktime(0,0,0,2017,1,1); 
				$end  = time(); 
				$random = mt_rand($start,$end); 
				$random_date=date('d.m.Y',$random);
				echo "$random_date<br>";
				}
			}
	}
}
}
once();
?>