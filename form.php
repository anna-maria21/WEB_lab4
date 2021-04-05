<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/form.css">
	<link rel="shortcut icon" href="logo.png" type="image/png">
	<title>Form</title>
</head>
<script type="text/javascript">
 //Скрипт очищающий форму от текста при нажатии на нее курсора
	function doClear(theText) { if (theText.value == theText.defaultValue) { theText.value = "" } }
</script>

<body>
	<?php 
		require('header.php');
	?>
	<section class="up">
		<img src="img/form/up.png" alt="Up">
		<h1>ОФОРМЛЕННЯ ЗАМОВЛЕННЯ</h1>
		<hr class="line" size="3">
	</section>
	<section class="content">
		<div class="image">
			<img src="img/form/1.svg" alt="Picture">
		</div>
		<div class="text_1">
			<h2 class="zag">“Dirty thoughts - dirty dids”</h2>
			<div class="back">
				<p class="text">Рік: 2019.</p>
				<p class="text">Матеріали: полотно, будівельні фарби, балони, туш.</p>
				<p class="text">Вартість: ***</p>
			</div>
		</div>
	</section>
	<section class="form">
		<form method="POST" action="for_form.php">
  			<input type="text" id="fname" name="fname" value="Ваше ім'я" onFocus="doClear(this)" required>
  			<br>
  			<input type="text" id="lname" name="lname" value="Ваше прізвище" onFocus="doClear(this)" required><br>
  			<input type="text" id="phone" name="phone" value="Ваш номер" onFocus="doClear(this)" required><br>
  			<input type="text" id="email" name="email" value="Ваш email" onFocus="doClear(this)" required><br>
  			<input type="submit" id="btn" value="Відправити запит">
		</form>
	</section>
	<section class="down">
		<p>Дякую за Вашу заявку!<br>Найближчим часом я зв’яжуся з Вами для<br>отримання детальнішої інформації</p>
		<img src="img/form/down.png" alt="Down">
	</section>
	<?php 
		require('footer.php');
	?>
</body>
</html>