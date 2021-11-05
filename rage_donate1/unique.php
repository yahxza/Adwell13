<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="images/icon.png">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/icon.png">
	<title>RAGE</title>
</head>
<body>

	<div id="fog" class="h"></div>

	<div class="wrapper">
		<div class="top">
			
			<header>
	<div class="header b-show headerfixed">
		<div class="container">
			<div class="header-content">
				<a href="/" class="logo header-content__logo">
					<img src="img/logo.png" alt="logo">
				</a>
				<a href="donate.php" class="button header-buttons_button">Пополнить счет</a>
			</div>
		</div>
	</div>
</header>
			<div id="complects-buy" class="h">
				<div class="container">
					<div class="popup" id="popup">
						<div class="popup-left">
							<img class="popup_img" id="complect-buy-image" src="img/m5.png" alt="m5">
						</div>
						<div class="popup-right">
							<div class="popup-right__text" style="margin-top: 30px;">
								<div class="popup-top">
									<p class="head" id="complect-name"></p>
									<div class="price__flex Now popup-price">
										<img class="ruble" src="img/ruble.svg" alt="ruble">
										<p class="summ" id="complect-cost"></p>
									</div>
								</div>
								<p class="desсription2 popup-right_description2">Содержимое набора:</p>
								<div class="bonuses" id="complect-content">

								</div>
								<div class="inputs-top popup_inputs-top">
									<div class="popupBtns">
										<select id="complect-server" class="donat popup_donat dd">
											<option value="0">RAGE #1</option>
											<option value="1">RAGE #2</option>
										</select>
										<input control-id="ControlID-2" id="complect-login" required="required" class="donat popup_donat last" placeholder="Логин" type="text">
									</div>
									<div class="popupBtns">
										<a onclick="buyComplect();" class="button popup__button cbtn1">Купить</a>
										<a onclick="closeComplects();" class="button popup__button cbtn2">Назад</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="shop">
				<div class="container">
					<h3 class="h3">Магазин</h3>
					<div class="way way320-1000">
						<a href="donate.php" class="way__content way320 way__padding">
							<div class="way__content_flex">
								<img class="icon" src="img/dollar.svg" alt="dollar">
								<p class="description4">Покупка валюты</p>
							</div>
						</a>
						<a href="unique.php" class="way__content way320 active last">
							<div class="way__content_flex">
								<img class="icon" src="img/diamond.svg" alt="diamond">
								<p class="description4">Уникальные товары</p>
							</div>
						</a>
					</div>
					<div class="uniqueGoods">
							

			<div class="product">
				<p class="description4 product_description4">BMW M8 «REDCUSTOM»</p>
				<img class="productPhoto" src="/img/complects/m8_remap.png" width="332" height="241">
				<div class="product-bottom">
					<div class="price">
						<div class="price__flex Now">
							<img class="ruble" src="img/ruble.svg" alt="ruble">
							<p class="summ">689</p>
						</div>
						<div class="price__flex Old">
							<img class="ruble" src="img/ruble.svg" alt="ruble">
							<p class="summ">1055</p>
						</div>
					</div>
					<a class="product-bottom__btn description4" onclick="goToComplectBuy(`BMW M8 «REDCUSTOM»`, `m8_remap`, `
				<row>BMW M8</row>
				<row>Уникальный винил</row>
			`, `/img/complects/m8_remap.png`, 689);">Купить</a>
				</div>
			</div>
		

			<div class="product">
				<p class="description4 product_description4">BMW M5 F90 «Весна»</p>
				<img class="productPhoto" src="/img/complects/f90_spring.png" width="332" height="241">
				<div class="product-bottom">
					<div class="price">
						<div class="price__flex Now">
							<img class="ruble" src="img/ruble.svg" alt="ruble">
							<p class="summ">549</p>
						</div>
						<div class="price__flex Old">
							<img class="ruble" src="img/ruble.svg" alt="ruble">
							<p class="summ">1000</p>
						</div>
					</div>
					<a class="product-bottom__btn description4" onclick="goToComplectBuy(`BMW M5 F90 «Весна»`, `f90_spring`, `
				<row>BMW M5 F90</row>
				<row>Уникальный винил</row>
			`, `/img/complects/f90_spring.png`, 549);">Купить</a>
				</div>
			</div>
		

			<div class="product">
				<p class="description4 product_description4">Богач</p>
				<img class="productPhoto" src="/img/complects/money.png" width="332" height="241">
				<div class="product-bottom">
					<div class="price">
						<div class="price__flex Now">
							<img class="ruble" src="img/ruble.svg" alt="ruble">
							<p class="summ">1400</p>
						</div>
						<div class="price__flex Old">
							<img class="ruble" src="img/ruble.svg" alt="ruble">
							<p class="summ">1650</p>
						</div>
					</div>
					<a class="product-bottom__btn description4" onclick="goToComplectBuy(`Богач`, `money`, `
				<row>30 дней VIP</row>
				<row>$1.000.000</row>
			`, `/img/complects/money.png`, 1400);">Купить</a>
				</div>
			</div>
							</div>
				</div>
			</div>
		</div>

		<footer>
	<div class="container">
		<div class="footer-top">
			<a href="/" class="logo footer-top__logo">
				<img src="img/logo.png" alt="logo">
			</a>
			
			<div class="socials">
				<a target="_blank" class="mr socials_social" href="https://vk.com/rage5mtasa"><img src="img/vk.svg" alt="vk"></a>
				<a target="_blank"  class="socials_social" href="https://www.youtube.com/channel/UC2j2G1MMviE2r2P7No3wRbQ"><img src="img/youtube.svg" alt="youtube"></a>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="links">
				<a href="policy.php" class="desсription2 links__description2">Политика возврата средств</a>
				<a href="rules.php" class="desсription2 links__description2">Правила сервиса</a>
				<a href="https://vk.com/ragemtateh" class="desсription2 links__description2 last">Служба поддержки</a>
			</div>

			<p class="copyright">
				<img class="unitpay inline" src="img/unitpay.svg" alt="unitpay">
				<img class="inline" src="img/WebMoney.svg" alt="webmoney">
			</p>
		</div>
	</div>
</footer>
	</div>

	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/complects.js"></script>

</body>
</html>