<?php
function revers(){
	if($chars=($_REQUEST['revers'])){
	$chars_t = explode(" ", $chars);
	$revers=array_reverse($chars_t);
	$revers_i=implode(" ", $revers);
	echo $revers_i;
	}
}
revers();
?>
<form>
<div>
	<input type="text" name="revers" required placeholder="Введите любой символ" autofocus>
</div>
	<div><input type="submit" name="Отправить"></div>
</form>






