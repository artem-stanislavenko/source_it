<?php
function generate($length = 5){
	if($chars=($_REQUEST['generete'])){
	$numChars = strlen($chars);
	$string = '';
		for ($i = 0; $i < $length; $i++) {
		$string .= substr($chars, rand(1, $numChars) - 1, 1);
		}
	return $string;
	}
}
 echo "Случайная строка: " . generate(5);
?>
<form>
<div>
	<input type="text" name="generete" required placeholder="Введите любой символ" autofocus>
</div>
	<div><input type="submit" name="Отправить"></div>
</form>