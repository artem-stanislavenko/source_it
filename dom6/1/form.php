<?php
session_start();
if(!empty($_POST['name'])){
$name=$_POST['name'];
$_SESSION['name']=$name;
}
?>
<form method="post" >
 	<div><input type="text" name="name" required placeholder="Введите имя" autofocus></div>
	<div><input type="submit" value="Отправить"></div>
</form>