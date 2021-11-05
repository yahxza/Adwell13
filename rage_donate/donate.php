<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="images/icon.png">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/icon.png">

	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">

	<title>RAGE</title>

</head>
<body>
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
			<div class="shop">
				<div class="container">
					<div class="flex">
						<h3 class="h3">Магазин</h3>
						<div class="moreElements">
							<div class="payroll">
								<div class="way way_donate">
									<a href="donate.php" class="way__content active way__padding">
										<div class="way__content_flex">
											<img class="icon" src="img/dollar.svg" alt="dollar">
											<p class="description4">Покупка валюты</p>
										</div>
									</a>
									<a href="unique.php" class="way__content last">
										<div class="way__content_flex">
											<img class="icon" src="img/diamond.svg" alt="diamond">
											<p class="description4">Уникальные товары</p>
										</div>
									</a>
								</div>
								<div class="purchase">
									<form>
										<div class="inputs-top">
											<div id="_complect-server"></div>
											<select id="complect-server" class="donat">
												<option value="0">RAGE #1</option>
												<option value="1">RAGE #2</option>
											</select>
											<input control-id="ControlID-2" id="donat-login" required="required" class="donat last" placeholder="Логин" type="text">
										</div>
										<div class="inputs-bottom">
											<input control-id="ControlID-3" id="donat-sum" class="donat" required min="1" placeholder="Сумма пополнения" type="number">
											<a control-id="ControlID-4" id="donat-button" class="button donat-button last" onclick="buyDonat()" class="button purchase__button">Перейти к оплате</a>
										</div>
									</form>
								</div>
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

	<script>
		function buyDonat(){

			var accountName = $(`#donat-login`).val();

			var serverId = $(`#complect-server`).val();

		    var sum = parseInt($('#donat-sum').val());

		    if(isNaN(sum)){
		        return showError('Неверно указана сумма');
		    }

		    if(sum < 1){
		        return showError('Минимальная сумма - 1 руб');
		    }

			if(!accountName){
				return showError('Вы не заполнили все поля');
			}

			if( ! (accountName && sum) ){ return false; }

			$.ajax({
				type: 'GET',
				url: `checkaccount.php?name=${urlDecode(accountName)}&serverid=${serverId}`,
				success: function(data){
					console.log(data);
					var response = JSON.parse(data);
					if(response.accountExists){
						// location.href = `https://unitpay.ru/pay/?sum=${sum}&account=DONAT;${urlDecode(accountName)};${serverId}&desc=Покупка%20валюты%20RAGE`;
						location.href = `/pay_redirect.php/=?sum=${sum}&account=DONAT;${urlDecode(accountName)};${serverId}&desc=Покупка%20валюты%20RAGE`;
					} else {
						showError('Аккаунт не найден');
					}
				},
				error: function(){
					showError('Неизвестная ошибка');
				},
			});
		}



	</script>
	
</body>
</html>