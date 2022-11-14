<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
	<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
	<meta charset="utf-8">

	<!-- Titel som ses oppe i browserens tab mv. -->
	<title>API Home | Zeeker</title>

	<!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

	<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
	<link href="css/api.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<nav class="navbar">
		<div class="container-fluid px-md-5">
			<div class="col-4"><a href=""><img class="logo" src="images/Zeeker_Horizontal_Hvid_Logo@2x.png" alt="logo"></a></div>
			<div class="col-6 col-md-7 d-flex justify-content-end">Tobias Larsen<div class="ps-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
					<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
				</svg></div>
			</div>
		</div>
	</nav>

	<div class="background col-12 d-flex">
		<div class="container gap-4 d-flex flex-md-row flex-column align-items-center justify-content-md-evenly col-12">
			<div class="card col-12 col-md-4">
				<div class="card-body d-flex justify-content-center row text-center">
					<h5 class="card-title">Brugerstatistik</h5>
					<p class="card-text">Se en optællende statistik over brugere og deres typer. </p>
					<div class="card-button1 d-flex justify-content-center align-items-center"><a href="#" class="card-link card-button2">Se brugerstatistik</a></div>
				</div>
			</div>
			<div class="card col-12 col-md-4">
				<div class="card-body d-flex justify-content-center row text-center">
					<h5 class="card-title">Udsend SMS til firma</h5>
					<p class="card-text">Udsend SMS’er til firmaer og se oversigten over tidligere udsendte sms’er.</p>
					<div class="card-button1 d-flex justify-content-center align-items-center"><a href="#" class="card-link card-button2">Gå til SMS System</a></div>
				</div>
			</div>
			<div class="card col-12 col-md-4">
				<div class="card-body d-flex justify-content-center row text-center">
					<h5 class="card-title">Coupon-code System</h5>
					<p class="card-text">En simpel GUI til at generere rabatkoder til Zeekers kunder.</p>
					<div class="card-button1 d-flex justify-content-center align-items-center"><a href="index.html" class="card-link card-button2">Gå til system.</a></div>
				</div>
			</div>
		</div>
</div>


</body>
</html>
