
(function() {
	var xhr;
	var ajaxButton = document.getElementById('ajaxCall');
	var target = document.getElementById('ajaxTarget');

	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var screenName = document.getElementById('screenName');
	var bio = document.getElementById('bio');

	

	// while (xhr.readystate < 4) {
	// 		target.style.width = "200px";
	// 		target.style.backgroundColor = '#FF0000';
	// 	}

	ajaxButton.onclick = function() {
		var nameValue = name.value;
		var emailValue = email.value;
		var screenNameValue = screenName.value;
		var bioValue = bio.value;
		var queryString = '?name=' + nameValue + '&email=' + emailValue + '&screen_name=' + screenNameValue + '&bio=' + bioValue;
		ajaxCall('scripts/form_handler.php', queryString);
	}

	function ajaxCall(url, query) {
		if (window.XMLHttpRequest) {
			xhr = new XMLHttpRequest();
		}
		else if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject('Msxml2', 'XMLHTTP');
			} catch(e) {
				try {
					xhr = new ActiveXObject('Microsoft', 'XMLHTTP');
				} catch(e) {}
			}
		} 

		if (!xhr) {
			alert('Geen httprequest');
		}


		xhr.onreadystatechange = displayReturn;
		xhr.open('GET', url + query);
		xhr.send();
	}

	function displayReturn() {
		if(xhr.readyState === 4) {
			if(xhr.status === 200) {
				target.innerHTML = xhr.responseText;
				target.style.opacity = 1;
			} 
		} 
	}

})();