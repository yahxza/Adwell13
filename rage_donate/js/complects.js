var currentBuyKey;
var errorTimeout;
var curComplectCost;
var curComplectName;

function replaceAll(text, search, replace){
    return text.split(search).join(replace);
}

function urlDecode(str){
	var result = decodeURI(str);
	result = replaceAll(result, '#', '%23');
	result = replaceAll(result, '+', '%2B');
	return result;
}


function closeComplects(){
	$('#complects-buy').addClass('h');
	$('#fog').addClass('h');
}

function goToComplectBuy(name, key, title, image, cost){
	$('#complect-server').val('0');

	$('#complect-buy-image').attr(`src`, image);
	$('#fog').removeClass('h');
	currentBuyKey = key;
	$(`#complects-buy`).removeClass('h');

	$(`#complect-name`).html(name);

	$(`#complect-content`).html(title);

	$(`#complect-content row`).each( function(){
		var data = $(this).html();
		$(this).html(`
			<div class="bonuseN">
				<img class="bonuseN_img" src="img/point.svg" alt="point">
				<p class="desсription2 bonuseN_description2">${data}</p>
			</div>
		`);
	} )

	$(`#complect-cost`).html(cost);

	curComplectCost = cost;
	curComplectName = key;
}

function buyComplect(){

	var accountName = $(`#complect-login`).val();
	var serverId = $(`#complect-server`).val();

	if(!accountName){
		return showError('Вы не заполнили все поля');
	}

	$.ajax({
		type: 'GET',
		url: `checkaccount.php?name=${urlDecode(accountName)}&serverid=${serverId}`,
		success: function(data){
			var response = JSON.parse(data);
			if(response.accountExists){
				location.href = `/pay_redirect.php/=?sum=${curComplectCost}&account=COMPLECT;${urlDecode(accountName)};${curComplectName};${serverId}&desc=Покупка%20набора%20RAGE`;
			} else {
				showError('Аккаунт не найден');
			}
		},
		error: function(){
			showError('Неизвестная ошибка');
		},
	});
	
}
