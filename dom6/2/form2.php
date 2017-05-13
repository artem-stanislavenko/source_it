<?php
if(!empty($_POST['surname'])){
$surname=$_POST['surname'];
setcookie('surname', $surname);
}
?>
<form method="post">
 	<div><input type="text" name="surname" required placeholder="Введите фамилию" autofocus></div>
	<div><input type="submit" value="Отправить"></div>
</form>