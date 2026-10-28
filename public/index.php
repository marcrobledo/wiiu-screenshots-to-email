<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
    <title>Send Wii U screenshots to e-mail</title>
	<style type="text/css">
body{
	font-family:sans-serif;
	font-weight: 400;
	background-color: #ff8800;
	font-size:20px;
	-webkit-user-select:none;
}
header{
	position:relative;
	text-align:center;
	color:white;
	text-shadow: #a45e0e 0 2px 4px;
}
header img{
	vertical-align:middle;
	margin-right:8px
}
h1{
	padding:0;
	font-size:36px;
}
#span-help{
	position:absolute;
	top:16px;
	right:64px;
}


input,button{
	font-family:inherit;
	font-size:inherit;
}
button{
	border-radius: 80px;
	background: -webkit-linear-gradient(90deg, #ccc 10%, #fff 50%); /* compatibility for Wii U browser */
	background: linear-gradient(0deg, #ccc 10%, #fff 50%);
	width:272px;
	box-sizing:border-box;
	text-shadow: #fff 0 2px 2px;
	box-shadow: #ccc 0 2px 6px, #fff 0 0 1px 2px inset;
	outline:none;
	border:none;
	padding: 8px 16px;
}
button:disabled{
	opacity:.5;
}
#wrapper{
	box-shadow: #a45e0e 0 2px 4px;
	background-color:#ffffff;
	margin: 0 auto;
	max-width: 720px;
	padding: 32px;
	border-radius:8px;
	box-sizing: border-box;
}




#col-left{float:left;}
#col-right{float:right;}
.clearfix{clear:both; display:block;}




input[type=file]{
	display:none;
}
input[type=email]{
	border-radius: 80px;
	height:40px;
	box-sizing:border-box;
	width:272px;
	padding: 2px 16px;
	border: 3px solid #ccc;
	text-align:center;
}
input[type=email]:focus{
	border-color:#ff8800
}
.form-row:not(:last-child){margin-bottom:8px;}
.form-row img{height: 56px; vertical-align:middle}
.form-row img.muted{opacity:.2;}



#btn-submit{
	padding-top:26px;
	padding-bottom:26px;
	border-radius:20px;
	font-size:130%;
}
#btn-submit-icon{
	margin-bottom:4px;
}
#icon-submit{
	height:72px;
}
#icon-loading{
	display:none
}
#snackbar{
	background-color:#333;
	color:white;
	text-align:center;
	padding: 4px 0 4px;
	border-radius: 8px;
	box-sizing:border-box;
	position:fixed;
	left:50%;
	margin-left:-256px;
	width:512px;
	bottom:-30px;
	-webkit-transition: bottom .35s;
}
#snackbar.show{
	bottom:80px;
}
	</style>
	<script type="text/javascript"><!--
const STRINGS=(function(userLanguage){
	if(userLanguage==='es'){
		return {
			'Send Wii U screenshots':'Enviar capturas Wii U',
			'Choose screen':'Escoger pantalla',
			'Recipient address':'Destinatario',
			'Send':'Enviar',
			'E-mail address is not valid':'La dirección de correo electrónica no es válida',

			'Wii U screenshots':'Capturas de pantalla de Wii U',
			'Success! Press %s to return to the game':'¡Finalizado! Pulsa %s para volver al juego',

			'Use this website to send Wii U screenshots to your e-mail address':'Usa este sitio web para enviar capturas de pantalla de Wii U a tu correo electrónico',
			'This is not an official web service by Nintendo':'Este no es un servicio oficial de Nintendo',
			'More info at %s':'Más información en %s'
		}
	}
	return null;
}(typeof navigator.language === 'string'? navigator.language.substr(0,2).toLowerCase() : 'en'));

/* get translated string */
const _=function(str){
	return (STRINGS && STRINGS[str]) || str;
}


/* form sanitized value getters */
const getScreen=function(file){
	if(file){
		if(/WiiU_screenshot_TV/.test(file.name))
			return 'TV';
		else if(/WiiU_screenshot_GamePad/.test(file.name))
			return 'GamePad';
	}
	return null;
}
const getScreen0=function(){return getScreen(document.getElementById('input-file0').files[0]);}
const getScreen1=function(){return getScreen(document.getElementById('input-file1').files[0]);}
const getEmail=function(){
	const currentEmail=document.getElementById('input-email').value;
	const trimedEmail=currentEmail.trim();
	if(trimedEmail.match(
		/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	)){
		return trimedEmail;
	}else{
		return null;
	}
}

const refreshScreen=function() {
	const isFile0=getScreen0();
	const isFile1=getScreen1();
	const isEmail=getEmail();

	if(isFile1 && isFile0===isFile1){
		document.getElementById('input-file1').value='';
		return refreshScreen();
	}

	document.getElementById('btn-picker1').disabled=!isFile0;
	document.getElementById('input-file1').disabled=!isFile0;
	document.getElementById('btn-submit').disabled=!isFile0 || !isEmail;

	document.getElementById('icon-screen1').className=isFile0? '' : 'muted';
	document.getElementById('icon-screen2').className=isFile1? '' : 'muted';
	document.getElementById('icon-envelope').className=isEmail? '' : 'muted';

	if(isFile0){
		document.getElementById('btn-picker0').innerHTML=isFile0;
		document.getElementById('btn-picker1').innerHTML=isFile1 || '+';

		if(document.getElementById('input-email').value)
			document.getElementById('btn-submit').focus();
	}else{
		document.getElementById('btn-picker0').innerHTML=_('Choose screen');
		document.getElementById('btn-picker1').innerHTML='+';
		document.getElementById('icon-screen2').className='muted';

		document.getElementById('btn-picker0').focus();
	}
	return true;
}

var snackbarTimeout; //let is unsupported
const showSnackbar=function(){
	document.getElementById('snackbar').className='show';

	if(snackbarTimeout)
		clearTimeout(snackbarTimeout);
	snackbarTimeout=setInterval(hideSnackbar, 5000);
}
const hideSnackbar=function(){
	document.getElementById('snackbar').className='';

	if(snackbarTimeout)
		clearTimeout(snackbarTimeout);
}


window.addEventListener('load', function(evt){
	/* UI strings translation */
	document.getElementById('title').innerHTML=_(document.getElementById('title').innerHTML);
	document.head.getElementsByTagName('TITLE')[0].innerHTML=document.getElementById('title').innerHTML;

	/* lazy image loading */
	document.body.style.backgroundImage='url(assets/bg.png)';
	document.getElementById('icon-title').src='assets/icon_title.png';

	<?php $isWiiU = preg_match("/Nintendo WiiU/", $_SERVER["HTTP_USER_AGENT"] ?? ""); ?>
	<?php if($isWiiU): ?>
		/* UI strings translation */
		document.getElementById('input-email').placeholder=_(document.getElementById('input-email').placeholder);
		document.getElementById('btn-submit-label').innerHTML=_(document.getElementById('btn-submit-label').innerHTML);
		document.getElementById('snackbar').innerHTML=_(document.getElementById('snackbar').innerHTML).replace('%s', '&#xe044;');

		/* lazy image loading */
		document.getElementById('icon-screen1').src='assets/icon_screen1.png';
		document.getElementById('icon-screen2').src='assets/icon_screen2.png';
		document.getElementById('icon-envelope').src='assets/icon_envelope.png';
		document.getElementById('icon-submit').src='assets/icon_submit.png';
		document.getElementById('icon-loading').src='assets/icon_loading.gif';

		/* UI events */
		document.getElementById('input-file0').addEventListener('change', refreshScreen);
		document.getElementById('input-file1').addEventListener('change', refreshScreen);
		document.getElementById('btn-picker0').addEventListener('click', function(evt){document.getElementById('input-file0').click();});
		document.getElementById('btn-picker1').addEventListener('click', function(evt){document.getElementById('input-file1').click();});

		document.getElementById('input-email').addEventListener('input', function(evt){
			const isFile0=getScreen0();
			const isEmail=getEmail();
			document.getElementById('btn-submit').disabled=!(isEmail && isFile0);
			document.getElementById('icon-envelope').className=isEmail? '' : 'muted';
		});

		document.getElementById('form').addEventListener('submit', function(evt){
			evt.preventDefault();

			/* check form validity */
			const isFile0=getScreen0();
			const isFile1=getScreen1();
			const isEmail=getEmail();
			if(!isEmail){
				alert(_('E-mail address is not valid'));
				return false;
			}else if(!isFile0){
				document.getElementById('btn-picker0').click();
				return false;
			}

			/* disable form elements */
			document.getElementById('btn-picker0').disabled=true;
			document.getElementById('btn-picker1').disabled=true;
			document.getElementById('input-email').disabled=true;
			document.getElementById('btn-submit').disabled=true;
			document.getElementById('icon-submit').style.display='none';
			document.getElementById('icon-loading').style.display='inline-block';
			hideSnackbar();

			/* ajax */
			const formData=new FormData();
			formData.append('screenshot0', document.getElementById('input-file0').files[0]);
			if(isFile1)
				formData.append('screenshot1', document.getElementById('input-file1').files[0]);
			formData.append('email', document.getElementById('input-email').value);
			formData.append('subject', _('Wii U screenshots'));

			const xhr=new XMLHttpRequest();
			//xhr.responseType='json'; //unsupported
			xhr.open('POST','./backend/send.php',true); 
			xhr.onreadystatechange=function(evt){
				if(xhr.readyState == 4){
					if(xhr.status == 200){
						const response=JSON.parse(xhr.responseText);
						if(response.success){
							showSnackbar();
						}else{
							alert('Error: '+response.errors.join('\n'));
						}
					}else{
						alert('Error '+xhr.status+': '+xhr.statusText);
					}
					document.getElementById('input-file0').value='';
					document.getElementById('input-file1').value='';
					refreshScreen();
					document.getElementById('btn-picker0').disabled=false;
					document.getElementById('input-email').disabled=false;
					document.getElementById('icon-submit').style.display='inline-block';
					document.getElementById('icon-loading').style.display='none';
				}
			};
			xhr.send(formData);
		});


		document.getElementById('snackbar').addEventListener('click', hideSnackbar);
		document.getElementById('span-help').addEventListener('click', function(evt){
			alert(
				_('Use this website to send Wii U screenshots to your e-mail address') + '\n\n' +
				_('This is not an official web service by Nintendo') + '\n\n' +
				_('More info at %s').replace('%s', 'www.marcrobledo.com')
			);
		});

		/* reset elements, just in case user has refreshed page */
		document.getElementById('input-file0').value='';
		document.getElementById('input-file1').value='';
		refreshScreen();
	<?php endif; ?>

});
	--></script>
</head>

<body>
	<header>
		<h1><img id="icon-title" /><span id="title">Send Wii U screenshots</span></h1>
		<span id="span-help">&#xe06b;</span>
	</header>    

	<section id="wrapper">
	<?php if($isWiiU): ?>
		<div id="snackbar">Success! Press %s to return to the game</div>
		<form id="form" action="send.php" method="POST" enctype="multipart/form-data">
			<div>
				<div id="col-left">
					<div class="form-row"><label><img id="icon-screen1" class="muted" /> <button type="button" id="btn-picker0"></button></label></div>
					<div class="form-row"><label><img id="icon-screen2" class="muted" /> <button type="button" id="btn-picker1" disabled></button></label></div>
					<div class="form-row"><label><img id="icon-envelope" class="muted" /> <input type="email" id="input-email" name="email" placeholder="Recipient address" required /></label></div>
				</div>
				<div id="col-right">
					<button id="btn-submit" type="submit">
						<div id="btn-submit-icon"><img id="icon-loading" /><img id="icon-submit" /></div>
						<span id="btn-submit-label">Send</span>
					</button>
				</div>
			</div>
			<br class="clearfix" />

			<input type="file" id="input-file0" name="screenshot0" accept="image/jpeg" required />
			<input type="file" id="input-file1" name="screenshot1" accept="image/jpeg" disabled />
		</form>
	<?php else: ?>
		This service is only accessible via the Wii U web browser.
	<?php endif; ?>
	</section>
</body>
</html>
