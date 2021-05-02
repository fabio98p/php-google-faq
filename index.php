<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./assets/css/master.css">
	
</head>
	<?php 
	$frequent_question = [
		'questions' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
		'answers' => [
			'paragraph' => [
				[" ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."],
				[" ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."],
				[" ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."],
				[" ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."],
			],
		],
	];
	[
		'questions' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
		'answers' => [
			'paragraph' => [
				[" ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."],
				[" ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."],
				[" ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."],
				[" ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."],
			],
		],
	];
	?>
<body>
	<header>
		<div class="logo">
			<div class="left">
				<img src="" alt="">
				<h2>Privacy e termini</h2>
			</div>
			<div class="right">
				<img src="https://lh3.googleusercontent.com/ogw/ADGmqu8gEDRpRKzWLlDDsIbQXtU-emQmu7xC-LpAqys=s32-c-mo" alt="">
				<!-- ci ho provato con l'immagine scaricata ma non la trova percio ho messo l'svg scritto -->
				<img src="./assets/img/background_wave.svg" alt="">
				<svg fill="grey" class="gb_We" focusable="false" viewBox="0 0 24 24"><path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path></svg>
			</div>
		</div>
		<div class="navbar">
			<ul>
				<li>Introduzione</li>
				<li>Norme sulla privacy</li>
				<li>Termini di servizio</li>
				<li>Tecnologie</li>
				<li class="active">Domande frequenti</li>
			</ul>
		</div>
	</header>
	<main>
		<?php 
		for ($i=0; $i < $frequent_question; $i++) { 
		?>


		<?= $frequent_question[$i] ?>


		<?php	
		}
		?>
	</main>
	<footer>
		<div class="right">
			<ul>
				<li>Google</li>
				<li>Tutto su Google</li>
				<li>Praivacy</li>
				<li>Termini</li>
			</ul>
		</div>
		<div class="left">
			<img src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAMAAAAMs7fIAAAABGdBTUEAALGPC/xhBQAAAFpQTFRFAAAAc8b%2BeNj%2BeLL7lt3/YbL4cs/9rNn8p9b7%2Bfn5hdD/a8D/7vD/vOL9itf%2B////3PD%2Byuj9R6348Pb7KZz2UL78MKL3Oqv4Zsz/ndX8qN/%2BI5T0S7X4W8b9mmuivQAAAAF0Uk5TAEDm2GYAAACXSURBVBjTXYqLEsIwCARR%2B27zpCFNxP//TSGOTu3OhDs2wGaPM9bD8hKGMDtnDq130GkxDK/BY/tVc6CtXa21Q72ClFKoqUrINBLAzHP9grKpccxFYmqNIcY4j%2BXDiLJBztmUXCRkGgkgIsZbO1kwEjVDKwYmDriSGt6FPHrnp6x1Bd/vzxP9Bj8mFfBH2K8Gtng1AA95bxQhE7o%2B68UQAAAAAElFTkSuQmCC" alt="">
			<select name="" id="">
				<option value="">Italiano</option>
			</select>
		</div>
	</footer>
</body>
</html>