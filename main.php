<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" href="img/logo.svg" type="image/svg">
	<title>MONS</title>
</head>
<body>
	<?php 
		require('header.php');
	?>
	<section class="offer">
		<img src="img/1st_img.png" alt="First">
		<div class="content">
			<div class="offertext">
				<p class="quote zag">Життя коротке.<br> Мистецтво нескінченне.</p>
				<p class="name">О. Уайльд</p>
				<p class="text">Якщо вважаєте сучасне мистецтво складним і незрозумілим, тоді Ви потрапили за адресою. Я пропоную привнести у своє життя трохи яскравості, барв, краси, модерну і смаку. Але одразу розставимо усі крапки над “і”: мистецтво не замовляють, а митець не малює за вказівкою. Тут Ви зможете придбати готові роботи, що змогли підкорити Ваше серце.</p>
				<button class="btn btn_width1" onclick="window.location='?page=info'">Дізнатися про мою творчість</button>
			</div>
		</div>
	</section>
	<section class="block2">
		<p class="cent zag">Познайомимось поближче</p>
		<hr class="line" size="3">
		<div class="wrapper">
			<div class="photo">
			<img src="img/portret.png" alt="Photos" class="photo1">
			<img src="img/portret1.png" alt="Photo1" class="photo_adapt">
			<img src="img/portret2.png" alt="Photo2" class="photo_adapt">
			</div>
			<div class="biography">
				<p>Уже давно зрозуміло, що цьому світу потрібен герой, здатний поєднати красу і простоту, вишуканість  і сучасність, сміливість і модерн.</p>
				<p class="mons">MONS -</p>
				<p>молодий, талановитий і натхненний бородатий митець, чиї роботи точно вразять Вас!</p>
				<p>Я народився у славетному місті Ніжині 35 рочків тому.  У дитинстві займався мовами, спортом, був справжнісіньким шибайголовою, проте завжди плекав любов до мистецтва. Шукав себе у різних напрямках - живопис, натюрморт, портрет, фотографія і навіть обмалював кілька місцевих стін, тому маю достатньо досвіду і багату уяву.</p>
			</div>
		</div>
	</section>

	<section class="block3">
		<p class="cent zag">Що я можу запропонувати</p>
		<hr class="line" size="3">
		<div class="wrapper1">
			<div class="canvas">
				<p class="big">M<span>ind</span> ON <span>canva</span>S</p>
				<p class="small">Картини</p>
				<img src="img/girl.png" alt="Girl">
			</div>
			<div class="sticks">
				<p class="big"><span>M</span>ark <span>ON</span> sheet<span>S</span></p>
				<p class="small">Стікери</p>
				<img src="img/sticker.png" alt="Sticker">
			</div>
		</div>
		<button class="btn btn_width2" onclick="window.location='?page=container'">В галерею</button>
		<img src="img/kisti.png" alt="Brushes" class="brushes">
	</section>
	<?php 
		require('footer.php');
	?>
</body>
</html>