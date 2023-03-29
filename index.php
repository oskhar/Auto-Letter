<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://moskhar.my.id/portfolio/pp.webp" rel="icon" type="image/x-icon">
    <meta property="og:image" content="https://moskhar.my.id/portfolio/pp.webp">
    <meta name="description" content="
        Cara membuat surat web untuk nembak atau keperluan masing masing tanpa harus bisa ngoding creator app: ProgarmmingTrick
    ">
	<title>Mau bikin surat Web</title>
<style type="text/css">
	body{background: rgb(210, 210, 210);
		color: #202020;}
	#header{
		height: 80vh;
		width: 60vw;
		position: absolute;
		left: 2vw;
		top: 10vh;
		background: #62a0ea;
		border-radius: 5px;
		box-shadow: -1vmin 1vmin 1vmin rgba(0, 0, 0, 0.2);
		overflow: hidden;
	}
	#con{
		height: 50%;
		width: 50%;
		position: absolute;
		left: 0;
		right: 0;
		margin: auto;
		top: 25%;
		background: transparent;
		overflow: hidden;
		color: #62a0ea;
	}
	#header #imgH{
		position: absolute;
		height: 15vmin;
		width: 15vmin;
		top: 2.5vmin;
		left: 2.5vmin;
		border-radius: 5px;
		background: url('surat0.webp') center no-repeat;
		background-size: cover;
	}
	#con div{
		background-color: white;
		border-radius: 10px;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: inline-block;
		z-index: 1;
	}
	#con div #img{
		position: absolute;
		left: 0;
		right: 0;
		margin: auto;
		top: 5%;
		height: 40%;
		width: 12vw;
		background: url('gif0.webp') center no-repeat;
		background-size:  auto 100%;
	}
	#con div p{
		position: absolute;
		top: 55%;
		left: 5%;
		width: 90%;
		text-align: center;
		font: 1.2vmax sans-serif;
	}
	section{
		position: absolute;
		right: 3vw;
		top: 10vh;
	}
	button{
		font: bold 1vmax sans-serif;
		background: white;
		position: relative;
		display: inline;
		padding: 1vmax;
		border: none;
		color: #202020;
		border-radius: 5px;
		margin-left: 1.5vmax;
		box-shadow: -1vmin 1vmin 1vmin rgba(0, 0, 0, 0.2);
	}
	button div{
		position: absolute;
		left: 0;
		top: 50%;
		width: 100%;
		height: 0vh;
		background: white;
		z-index: -1;
		border-radius: 50%;
		box-shadow: -1vmin -1vmin 1vmin rgba(0, 0, 0, 0.2);
	}
	section .tombol1{box-shadow: none;}
	main{
		width: 34vw;
		height: 63vh;
		border-bottom: 5vh solid white;
		position: absolute;
		bottom: 10vh;
		right: 1vw;
		border-radius: 5px;
		background: white;
		z-index: 3;
		overflow-y: scroll;
		overflow-x: hidden;
		box-shadow: -1vmin 1vmin 1vmin rgba(0, 0, 0, 0.2);

	}#m1,#m2,#m3,#m4{position: absolute;left: 0;right: 0;margin: auto;top: 5vmin;opacity: 0;height: 0;width: 100%;overflow: hidden;}
	#m1{animation: opt 1s linear forwards;height: 83vmax;}
	main img{
		position: relative;
		display: inline-block;
		margin-left: 2vmax;
		margin-top: 2vmax;
		width: 8vmax;
		height: 8vmax;
		background-size: cover;
		border-radius: 3px;
	}
	#m2 *{
		display: block;
		position: relative;
		margin-top: 1vh;
		font: 1.2vmax sans-serif;
		left: 5%;
	}
	textarea{
		width: 90%;
		height: 20%;
	}
	#sample{
		position: relative;
		display: inline-block;
		width: 3vmax;
		height: 3vmax;
		margin-left: 1vmax;
		margin-top: 1vmax;
	}
	@KeyFrames click{
		to{height: 15vh;border-radius: 0%;}
	}
	@KeyFrames opt{to{opacity: 1}}
	@KeyFrames kanan{
		0%{z-index: 5;left: 100%;}
		100%{left: 0%;}
	}
	@KeyFrames kiri{
		0%{z-index: 5;left: -100%;}
		100%{left: 0%;}
	}
	#button{
		width: 16vmax;
		height: 20%;
		left: 0;
		right: 0;
		margin: auto;
		bottom: 0;
		position: absolute;
		background: transparent;
	}
	h1{
		font: bold 1.3vmax sans-serif;
		color: #303030;
		position: absolute;
		left: 0;
		top: 0;
		padding: 1vw;
		display: block;
		line-height: 0vw;
	}
	h2{
		font: bold 1.3vmax sans-serif;
		color: darkred;
		position: absolute;
		right: 0;
		top: -1vmin;
		padding: 1vw;
		display: block;
		line-height: 0vw;
	}
	#isiLagu label{
		display: block;
		font: bold 1vmax sans-serif;
		color: white;
	}
	#lagu{
		position: absolute;
		right: 2.5vh;
		top: 2.5vh;
		height: 5vh;
		width: 5vh;
		text-align: center;
		color: white;
		font: bold 3vmax sans-serif;
		z-index: 7;
	}
	@KeyFrames buka{to{height: 20%;}}
	@media (max-width: 1200px){
		#header{
			height: 40vh;
			width: 94vw;
			left: 3vw;
			top: 3vh;
		}
		main{
			width: 94vw;
			height: 31vh;
			bottom: 3vw;
			left: 3vw;
		}
		section{
			position: absolute;
			left: 3vw;
			right: auto;
			top: 50vh;
		}
		#download{
			position: absolute;
			right: 3vw;
			top: 50vh;
		}
		#m1{
			height: 65vmax;
		}
	}
</style>
</head>
<body>
	<div id="loader" style="position: fixed;height: 100%;width: 100%;left: 0;top: 0;background: #0090e7;z-index: 111;">
	    <style type="text/css">
	        #loader #pendd1{
	            display: block;
	            position: absolute;
	            top: 20%;
	            left: 0;
	            right: 0;
	            margin: auto;
	            height: 100px;
	            width: 100px;
	            background: transparent;
	            border-radius: 50%;
	            animation: loader 3s infinite;
	            border: 5px solid #0090e7;
	            border-top: 5px solid white;
	            border-bottom: 5px solid white;
	        }
	        @KeyFrames loader{
	            0%{transform: rotate(0deg);}
	            100%{transform: rotate(360deg);}
	        }
	    </style>
	    <div id="pendd1"></div>
	    <p style="color: white; display:block; font-size:24px; font-family: sans-serif; position:absolute; top:45%; left:0; right:0; margin:auto;text-align:center;">Loading</p>
		<script type="text/javascript">
			window.addEventListener("load", function () {
				    document.getElementById("loader").innerHTML = "";
				    document.getElementById("loader").remove();
			});
		</script>
	</div>
	<div id="header">
		<div id="imgH" loading='lazy' onclick="tombol(document.querySelector('.tombol3'))"></div>
		<div id="lagu" loading='lazy' onclick="lagu();">&#9835</div>
		<div id="isiLagu" style="position: absolute;right: 3.5vmax;top: 2.5vmin;height: 0;width: 20vmax;overflow: hidden;z-index: 6;background: #62a0ea;">
			<label><input id="pilihLagu1" type="radio" name="lagu" onclick="gantiLagu(0);" checked>Troye Sivan - Angel baby</label>
			<label><input id="pilihLagu2" type="radio" name="lagu" onclick="gantiLagu(1);">Capital Cities - Safe and sound</label>
			<label><input id="pilihLagu3" type="radio" name="lagu" onclick="gantiLagu(2);">Fallen Kingdom</label>
		</div>
		<div id="con">
			<div id="slide1">
				<h1>1</h1>
				<div id="img" onclick="tombol(document.querySelector('.tombol1'))"></div>
				<p onclick="document.querySelector('textarea').select();tombol(document.querySelector('.tombol2'));">Kamu mau jadi pacarku?</p>
			</div>
		</div>
		<div id="button">
			<button id="kiri" onclick="kiri()" style="opacity:0.3;border-radius: 50%;"><</button>
			<button id="tambah" onclick="tambah()" style="font-size: 2vmax;">+</button>
			<button id="kanan" onclick="kanan()" style="opacity:0.3;border-radius: 50%;">></button>
		</div>
	</div>
	<section>
		<button class="tombol1" onclick="tombol(this)" value="1"><div style="animation: click 800ms linear forwards;"></div>sticker</button>
		<button class="tombol2" onclick="tombol(this)" value="2"><div></div>text</button>
		<button class="tombol3" onclick="tombol(this)" value="3"><div></div>surat</button>
		<button class="tombol4" onclick="tombol(this)" value="4"><div></div>color</button>
	</section>
	<main>
		<div id="m1">
			<?php for ($i=0; $i <= 21; $i++): ?>
				<img src="gif<?php echo $i ?>.webp" onclick="sticker(<?php echo $i ?>)" loading="lazy">
			<?php endfor; ?>
		</div>
		<div id="m2">
			<label style="margin-top:7vh">Tulis isi surat anda</label>
			<textarea onkeyup="text(this)">Kamu mau jadi pacarku?</textarea>

			<label style="margin-top: 7vh;">Atur pilihan</label>
			<label>Tombol 1</label>
			<input type="text" style="height: 1.6vmax;width: 90%;" placeholder=" Terima" onkeyup="btn1(this)">
			<label>Tombol 2</label>
			<input type="text" style="height: 1.6vmax;width: 90%;" placeholder=" Tolak" onkeyup="btn2(this)">

			<label style="margin-top: 7vh;">Nomor whatsapp anda(harus diawali 08)</label>
			<input type="text" style="height: 1.6vmax;width: 90%;" placeholder=" 0897xx" onkeyup="noWa(this)">
			<label>Pesan ke whatsapp anda</label>
			<input type="text" style="height: 1.6vmax;width: 90%;" placeholder=" Aku mau jadi pacar..." onkeyup="pesanWa(this)">
		</div>
		<div id="m3">
			<?php for ($i=0; $i <= 4; $i++): ?>
				<img src="surat<?php echo $i ?>.webp" onclick="surat(<?php echo $i ?>)" loading="lazy">
			<?php endfor; ?>
		</div>
		<div id="m4">
			<p style="display: block;position: relative;left: 1vw;font: bold 1.2vmax sans-serif;">Warna Background</p>
			<?php 
			$warnaBg = ['#99c1f1','#62a0ea','#3584e4','#1c71d8','#1a5fb4','#8ff0a4','#57e389','#33d17a','#2ec27e','#26a269','#f9f06b','#f8e45c','#f6d32d','#f5c211','#e5a50a','#ffbe6f','#ffa348','#ff7800','#e66100','#c64600','#f66151','#ed333b','#e01b24','#c01c28','#a51d2d','#dc8add','#c061cb','#9141ac','#813d9c','#613583','#cdab8f','#b5835a','#986a44','#865e3c','#63452c','#ffffff','#f6f5f4','#deddda','#c0bfbc','#9a9996','#77767b','#5e5c64','#3d3846','#241f31','#000000', 'linear-gradient(to top left, #43C6AC, #191654)', 'linear-gradient(to top left, #FF886A, #0066FF)', 'linear-gradient(to top left, #2BC0E4, #EAECC6)', 'linear-gradient(to top left, #0F3443, #34E89E)', 'linear-gradient(to top left, hsl(168,100%,20%) 20%, hsl(168,100%,35%) 20% 40%, hsl(168,100%,50%) 40% 60%, hsl(168,100%,65%) 60% 80%, hsl(168,100%,80%) 80% 100%)', 'linear-gradient(to top left, hsl(212,100%,20%) 20%, hsl(212,100%,35%) 20% 40%, hsl(212,100%,50%) 40% 60%, hsl(212,100%,65%) 60% 80%, hsl(212,100%,80%) 80% 100%)', 'linear-gradient(to top left, hsl(12,100%,20%) 20%, hsl(12,100%,35%) 20% 40%, hsl(12,100%,50%) 40% 60%, hsl(12,100%,65%) 60% 80%, hsl(12,100%,80%) 80% 100%)', 'linear-gradient(to top left, hsl(299,100%,20%) 20%, hsl(299,100%,35%) 20% 40%, hsl(299,100%,50%) 40% 60%, hsl(299,100%,65%) 60% 80%, hsl(299,100%,80%) 80% 100%)'];

			$warnaTx = ['#99c1f1','#62a0ea','#3584e4','#1c71d8','#1a5fb4','#8ff0a4','#57e389','#33d17a','#2ec27e','#26a269','#f9f06b','#f8e45c','#f6d32d','#f5c211','#e5a50a','#ffbe6f','#ffa348','#ff7800','#e66100','#c64600','#f66151','#ed333b','#e01b24','#c01c28','#a51d2d','#dc8add','#c061cb','#9141ac','#813d9c','#613583','#cdab8f','#b5835a','#986a44','#865e3c','#63452c','#ffffff','#f6f5f4','#deddda','#c0bfbc','#9a9996','#77767b','#5e5c64','#3d3846','#241f31','#000000'];
			 ?>
			<?php for ($i=0; $i < count($warnaBg); $i++): ?>
				<div style='background: <?php echo $warnaBg[$i] ?>;box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);' id="sample" onclick="warnaBg('<?php echo $warnaBg[$i] ?>')"></div>
			<?php endfor; ?>
			<p style="display: block;position: relative;left: 1vw;font: bold 1.2vmax sans-serif;margin-top: 7vw;">Warna Text</p>
			<?php for ($i=0; $i < count($warnaTx); $i++): ?>
				<div style='background: <?php echo $warnaTx[$i] ?>;box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);' id="sample" onclick="warnaTx('<?php echo $warnaTx[$i] ?>')"></div>
			<?php endfor; ?>
<!-- 
$warna = ['#99c1f1','#62a0ea','#3584e4','#1c71d8','#1a5fb4','#8ff0a4','#57e389','#33d17a','#2ec27e','#26a269','#f9f06b','#f8e45c','#f6d32d','#f5c211','#e5a50a','#ffbe6f','#ffa348','#ff7800','#e66100','#c64600','#f66151','#ed333b','#e01b24','#c01c28','#a51d2d','#dc8add','#c061cb','#9141ac','#813d9c','#613583','#cdab8f','#b5835a','#986a44','#865e3c','#63452c','#ffffff','#f6f5f4','#deddda','#c0bfbc','#9a9996','#77767b','#5e5c64','#3d3846','#241f31','#000000'];
 -->
		</div>
	</main>
	<!-- <a onclick="this.href='data:text/html;charset=UTF-8,'+encodeURIComponent(isiFile)" download="surat.html" style="text-decoration: none;color: #202020;">Download</a> -->
	<!-- <a onclick="donwload();this.href='data:text/html,'+encodeURIComponent(isiFile)" download="surat.html" style="text-decoration: none;color: #202020;">Download</a> -->
	<button onclick="donwload()" style="border-radius: 3vw;" id="download">&#x2193 Download</button>
</body>
<script type="text/javascript">

var posisiV = 0;
var stickerV = ['gif0.webp'];
var warnaBgV = '#62a0ea';
var warnaTxV = '#62a0ea';
var suratV = 'surat0.webp';
var textV = ['Kamu mau jadi pacarku?'];
var noWaV = '';
var pesanWaV = '';
var btn1V = 'Terima';
var btn2V = 'Tolak';
var laguV = 'apa0.mpga';
var pin = 0;

function lagu() {
	document.getElementById('isiLagu').style.animation = pin == 0 ? 'buka 1s linear forwards' : 'none';
	pin = pin == 0 ? 1 : 0;
}
function gantiLagu(no) {
	laguV = 'apa'+no+'.mpga';
	lagu();
}
function sticker(no) {
	stickerV[posisiV] = "gif"+no+".webp";
	document.querySelector('#slide'+(posisiV+1)+' #img').style.background = 'url("gif'+no+'.webp") center no-repeat';
	document.querySelector('#slide'+(posisiV+1)+' #img').style.backgroundSize = 'auto 100%';
}
function surat(no) {
	suratV = "surat"+no+".webp";
	document.querySelector('#header #imgH').style.background = 'url("'+suratV+'") center no-repeat';
	document.querySelector('#header #imgH').style.backgroundSize = 'cover';
	
}
function warnaBg(cl) {
	warnaBgV = cl+'';
	document.getElementById('header').style.background = warnaBgV;
	document.getElementById('isiLagu').style.background = warnaBgV;
}
function warnaTx(cl) {
	warnaTxV = cl+'';
	document.querySelector('#con').style.color = warnaTxV;
}
function text(obj) {
	textV[posisiV] = obj.value+'';
	document.querySelector('#slide'+(posisiV+1)+' p').innerHTML = obj.value+'';
}
function noWa(obj) {
	noWaV = obj.value;
}
function pesanWa(obj) {
	pesanWaV = obj.value;
}
function btn1(obj) {
	btn1V = obj.value;
}
function btn2(obj) {
	btn2V = obj.value;
}
function kiri() {
	if (posisiV-1 >= 0){
		for (let i = 0; i < textV.length; i++) {
			document.querySelector('#slide'+(i+1)).style.zIndex = "1";
			document.querySelector('#slide'+(i+1)).style.animation = "none";
		}
		document.querySelector('#slide'+(posisiV+1)).style.zIndex = "2";

		posisiV--;
		document.querySelector('textarea').value = document.querySelector('#slide'+(posisiV+1)+' p').innerHTML;
		document.querySelector('#slide'+(posisiV+1)).style.animation = "kiri 800ms linear forwards";
		document.querySelector('#slide'+(posisiV+1)).style.zIndex = "5";
		document.querySelector('#kanan').style.opacity = "1";
		document.querySelector('#kiri').style.opacity = posisiV == 0 ? "0.3" : "1";
		return "1";
	}else{return "none";}
}
function kanan() {
	if (posisiV+1 < textV.length){
		for (let i = 0; i < textV.length; i++) {
			document.querySelector('#slide'+(i+1)).style.zIndex = "1";
			document.querySelector('#slide'+(i+1)).style.animation = "none";
		}
		document.querySelector('#slide'+(posisiV+1)).style.zIndex = "2";

		posisiV++;
		document.querySelector('textarea').value = document.querySelector('#slide'+(posisiV+1)+' p').innerHTML;
		document.querySelector('#slide'+(posisiV+1)).style.animation = "kanan 800ms linear forwards";
		document.querySelector('#slide'+(posisiV+1)).style.zIndex = "5";
		document.querySelector('#kiri').style.opacity = "1";
		document.querySelector('#kanan').style.opacity = posisiV == (textV.length-1) ? "0.3" : "1";
	}
}
function del(no) {
	kiri();
	stickerV.splice(no, 1);
	textV.splice(no, 1);
	// console.log(textV+" : "+no)
	document.querySelector('#slide'+(posisiV+2)).remove();
	for (let i = no; i < textV.length; i++) {
		document.getElementById('slide'+(i+2)).id = 'slide'+(i+1);
		document.getElementById('h'+(i+2)).innerHTML = (i+1);
	}
	document.querySelector('#kanan').style.opacity = posisiV == (textV.length-1) ? "0.3" : "1";
}
function tambah() {
	for (let i = 0; i < textV.length; i++) {
		document.querySelector('#slide'+(i+1)).style.zIndex = "1";
		document.querySelector('#slide'+(i+1)).style.animation = "none";
	}
	document.querySelector('#slide'+(posisiV+1)).style.zIndex = "2";

	posisiV = posisiV + (textV.length - posisiV);
	document.getElementById('con').innerHTML = document.getElementById('con').innerHTML + `<div id="slide`+(posisiV+1)+`"><h1 id="h`+(posisiV+1)+`">`+(posisiV+1)+`</h1><h2 onclick="del(`+(posisiV)+`);">X</h2><div id="img" onclick="tombol(document.querySelector('.tombol1'))"></div><p onclick="document.querySelector('textarea').select();tombol(document.querySelector('.tombol2'));">Masukan text!</p></div>`;
	stickerV.push('');
	textV.push('Masukan text!');
	sticker(0);
	document.querySelector('textarea').value = "Masukan text!";
	document.querySelector('#slide'+(posisiV+1)).style.animation = "kanan 800ms linear forwards";
	document.querySelector('#slide'+(posisiV+1)).style.zIndex = "5";
	document.querySelector('#kiri').style.opacity = "1";
	document.querySelector('#kanan').style.opacity = "0.3";
}

var height = ["83vmax","60vmax","100%","82vmax"];
if (window.innerWidth < 1200) {
	height[0] = '65vmax';
	height[3] = '65vmax';
}
function tombol(obj) {
	for (var i = 1; i <= 4; i++) {
		document.getElementById('m'+i).style.height = "0";
		document.getElementById('m'+i).style.animation = "none";
		document.querySelector('.tombol'+i+" div").style.animation = "none";
		document.querySelector('.tombol'+i).style.boxShadow = "-1vmin 1vmin 1vmin rgba(0, 0, 0, 0.2)";
	}
	obj.querySelector("div").style.animation = "click 800ms linear forwards";
	obj.style.boxShadow = "none";
	document.getElementById('m'+obj.value).style.height = height[obj.value - 1];
	document.getElementById('m'+obj.value).style.animation = "opt 1s linear forwards";
}

function donwload() {
var isiFile = `
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://moskhar.my.id/Buat-Surat/`+suratV+`" rel="icon" type="image/x-icon">
<title>Surat Cintah Untuk Kamu</title>
</head>
<style type="text/css">
#back{
height: 100vh;
width: 100vw;
position: absolute;
left: 0;
top: 0;
background: `+warnaBgV+`;
font-family: sans-serif;
color: `+warnaTxV+`;
overflow: hidden;
}
#back #isi{
height: 60vmin;
width: 55vw;
left: 0;
right: 0;
margin: auto;
position: absolute;
top: 15vh;
background: #f9faf5;
border: 70px solid #f9faf5;
border-radius: 30px;
font-size: 2.2vmax;
}
#back img{
position: absolute;
left: 0;
right: 0;
margin: auto;
top: 0;
height: 50%;
z-index: 2;
}
#content{
width: 100%;
height: 100%;
left: 0;
top: 0;
position: absolute;
}
#loading{
width: 100%;left: 0;height: 10px;
background: #2b627a;border-radius: 5px;
position: absolute;bottom: -12px;
}
#dalamLoading{
position: absolute;
left: 0;
top: 0;
height: 100%;
width: 100%;
border-radius: 5px;
background: `+warnaTxV+`;
}
@KeyFrames loading{
0% {width: 100%;}
100%{width: 0%;}
}
@KeyFrames opt{
to{opacity: 0;z-index: 1;}
}
@KeyFrames love{
to{top: 0;opacity: 0;}
}
h1{
color:deeppink;
position: absolute;
left: 0;
right: 0;
height: 50px;
width: 50px;
margin: auto;
top: 28.5vmin;
font-size: 0px;
}
#content .pt{
    position: absolute;
    width: 100%;
    text-align: center;
    top: 53%;
    opacity: 0;
}
</style>
<body>
<div id="back">
<div id="loader" style="position: fixed;height: 100%;width: 100%;left: 0;top: 0;background: #0090e7;z-index: 111;">
    <style type="text/css">
        #loader #pendd1{
            display: block;
            position: absolute;
            top: 20%;
            left: 0;
            right: 0;
            margin: auto;
            height: 100px;
            width: 100px;
            background: transparent;
            border-radius: 50%;
            animation: loader 3s infinite;
            border: 5px solid #0090e7;
            border-top: 5px solid white;
            border-bottom: 5px solid white;
        }
        @KeyFrames loader{
            0%{transform: rotate(0deg);}
            100%{transform: rotate(360deg);}
        }
    </style>
    <div id="pendd1"></div>
    <p style="color: white; display:block; font-size:24px; font-family: sans-serif; position:absolute; top:45%; left:0; right:0; margin:auto;text-align:center;">Loading</p>
<script type="text/javascript">
	window.addEventListener("load", function () {
		    document.getElementById("loader").innerHTML = "";
		    document.getElementById("loader").remove();
	});
</script`+`>
</div>
<div id="isi"><div id="content"><p id="click" style="position: absolute;width: 100%;text-align: center;bottom: 4vmin;">Click Surat 👆</p></div><div id="loading"><div id="dalamLoading"></div></div></div>
<img id="surat" src="https://moskhar.my.id/Buat-Surat/`+suratV+`"  style="width: 40vmin;height: 40vmin;position: absolute;top: 25vmin;border-radius: 20px;z-index:10;" onclick="clc();">

<h1>♥</h1>
<h1 style="left: 50px">♥</h1>
<h1 style="left: 100px">♥</h1>
<h1 style="left: -50px">♥</h1>
<h1 style="left: -100px">♥</h1>
<h1 style="left: 50px;top:32vmin;">♥</h1>
<h1 style="left: 100px;top:32vmin;">♥</h1>
<h1 style="left: -50px;top:32vmin;">♥</h1>
<h1 style="left: -100px;top:32vmin;">♥</h1>
<h1 style="left: 150px;top:32vmin;">♥</h1>
<h1 style="left: -150px;top:32vmin;">♥</h1>
</div>
</body>
<script type="text/javascript">

var text = ['`+textV.join("','")+`'];
var sticker = ['https://moskhar.my.id/Buat-Surat/`+stickerV.join("','https://moskhar.my.id/Buat-Surat/")+`'];
(function(){
	for (var i = 0; i < sticker.length; i++) {
		document.getElementById('content').innerHTML = document.getElementById('content').innerHTML + "<img id='im"+i+"' src='"+sticker[i]+"' style='opacity: 0;'>";
		document.getElementById('content').innerHTML = document.getElementById('content').innerHTML + "<p class='pt' id='pt"+i+"'>" + text[i] + "</p>";
	}
})();
var pin = 0;
function auto() {
document.getElementById('im'+pin).style.opacity = 1;
document.getElementById('pt'+pin).style.opacity = 1;
if (pin != 0) {
	document.getElementById('im'+(pin-1)).style.opacity = 0;
	document.getElementById('pt'+(pin-1)).style.opacity = 0;
}
else{
	document.getElementById('click').remove();
}
pin++;
if (pin == text.length) {
document.getElementById('loading').remove();
document.getElementById('content').innerHTML = document.getElementById('content').innerHTML + '<div style="font-size: 3.5vmax;font-weight:bold;position: absolute;bottom: -10px;width: 100%;left: 0;"><a href="https://api.whatsapp.com/send?phone=62`+noWaV.substring(1)+`&text=`+pesanWaV.split(' ').join('+')+`" style="text-decoration: none;position: relative;display: inline;text-shadow: 3px 3px `+warnaTxV+`, -3px -3px `+warnaTxV+`;color: #f9faf5;text-align: center;">`+btn1V+`</a><a href="https://api.whatsapp.com/send?phone=62`+noWaV.substring(1)+`&text=`+pesanWaV.split(' ').join('+')+`" style="text-decoration: none;position: relative;display: inline;text-shadow: 3px 3px `+warnaTxV+`, -3px -3px `+warnaTxV+`;color: #f9faf5;text-align: center;left: 12%;">`+btn2V+`</a></div>';
}else{setTimeout(() => {auto()}, 6000);}
}

var audio = new Audio('https://moskhar.my.id/Buat-Surat/`+laguV+`');
function clc() {
audio.play();
setTimeout(() => {
	auto();
	document.getElementById("dalamLoading").style.animation = "loading 6000ms linear infinite";
}, 800);
document.styleSheets[0].addRule('h1','animation: love 2000ms linear forwards;font-size: 50px;');
document.getElementById("surat").style.animation = "opt 200ms linear forwards";
}
`+`</script`+`></html>` ;
var hiddenElement = document.createElement('a');
hiddenElement.href = 'data:text/html,' + encodeURIComponent(isiFile);
hiddenElement.target = '_blank';
hiddenElement.download = 'surat.html';
hiddenElement.click();
}

</script>
</html>
