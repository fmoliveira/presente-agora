window.fbAsyncInit = function() {
	FB.init({
		appId      : '718844268165157',
		cookie     : true,
		xfbml      : true,
		version    : 'v2.1'
	});
};

(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/pt_BR/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function fblogin() {
	FB.login(function(data) {
		if (data.status == "connected") {
			location.href = '/inicio';
		}
	}, {scope: 'public_profile'});
};