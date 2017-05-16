<?php
include 'php.php'
?>

<form method="request">
<div>
	<input type="text" name="asc" required placeholder="Введите вопрос" autofocus>
</div>
<div>
	<input type="text" name="answer" required placeholder="Введите ответ" autofocus>
</div>
<div>
	<select  name="sorting">
		<option value="mathematics">Математика</option>
		<option value="geography">География</option>
		<option value="literature">Литература</option>
	</select>
</div>
<div><input type="submit" name="Отправить"></div>
</form>