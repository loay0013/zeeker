<?php
require "settings/init.php";
if(!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;
    if (!empty($file["Img"]["tmp_name"])) {
        move_uploaded_file($file["Img"]["tmp_name"], "uplods/" . basename($file["Img"]["name"]));
    }


    $sql = "INSERT INTO coupon (CouponCode, ProcentDiscount, FastDiscount, DateDiscount, MonthDiscount, BindDiscount, CvrDiscount, SpecifikDiscount, SlutDiscount) values(:CouponCode, :ProcentDiscount, :FastDiscount, :DateDiscount, :MonthDiscount, :BindDiscount, :CvrDiscount, :SpecifikDiscount, :SlutDiscount)";
    $bind = [":CouponCode" => $data["CouponCode"], ":ProcentDiscount" => $data["ProcentDiscount"], ":FastDiscount" => $data["FastDiscount"], ":DateDiscount" => $data["DateDiscount"], ":MonthDiscount" => $data["MonthDiscount"], ":BindDiscount" => $data["BindDiscount"], ":CvrDiscount" => $data["CvrDiscount"], ":SpecifikDiscount" => $data["SpecifikDiscount"], ":SlutDiscount" => $data["SlutDiscount"]];
    $db->sql($sql, $bind, false);

    echo "<body style='font-size: 2rem; background-color: #000000; '></body>

       <p style='color: white; text-align: center; margin-top: 20%;' ><p/>
       <div style='display: flex; justify-content: center;'>
       <button style='display:flex; justify-content:center; padding: 10px '>
       <a  style='text-decoration: none; color: black;' href='insert.php' ></a></button>
       </div>
       <a style='display: flex; justify-content: center; color: white; padding-top: 20px; text-decoration: none' href='#'></a>
       ";
    exit;
}
?>
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title> Zeeker | Coupon-system</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>



<form method="post" action="insert.php" enctype="multipart/form-data">

	<div class="background col-12 d-flex justify-content-center align-items-center">
		<div class="box d-flex flex-column justify-content-center px-4 py-5">
			<div class="row justify-content-center m-0">
				<div class="col-12">
					<div class="form-group m-2 mt-0 mb-3">
						<label for="coupon_code"> <p class="text-dark m-0 rubrik">Coupon code</p></label>
						<input class="form-control" type="text" placeholder="Indtast coupon her" name="data[CouponCode]"  id="CouponCode" >
					</div>
				</div>


				<div class="col-12 col-md-6">
					<div class="form-group m-2">
						<label for="MonthDiscount"> <p class="text-dark m-0 rubrik">Antal gratis måneder</p></label>
						<div class="dropdown">
                            <select class="dropdown dd-btn px-2" name="data[MonthDiscount]"  id="MonthDiscount">
                                <option value="0">Antal gratis måneder</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="6">Andet</option>
                            </select>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="form-group m-2">
						<div class="dropdown">
                            <label for="BindDiscount">
                                <p class="text-dark m-0 rubrik">Bindingsperiode</p></label>
                            <select name="data[BindDiscount]" id="BindDiscount" class="dropdown dd-btn px-2">
                                <option  value="0">Bindingsperiode</option>
                                <option  value="3">3 måneder</option>
								<option  value="6">6 måneder</option>
								<option  value="9">9 måneder</option>
								<option  value="12">12 måneder</option>
								<option  value="12">Andet</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 mt-3">
					<div class="form-group m-2 mb-4">
						<label for="CvrDiscount"> <p class="text-dark m-0 rubrik">CVR-nummer</p></label>
						<input class="form-control py-0" placeholder="Indtast CVR-nummer" type="text" name="data[CvrDiscount]" id="CvrDiscount">
					</div>
				</div>

				<div class="col-12 col-md-6 mt-3">
					<div class="form-group m-2 pb-2">
						<div class="dropdown">
							<label for="SpecifikDiscount">
								<p class="text-dark m-0 rubrik">Rabat coupon til specifik plan</p></label>
							<select class="dropdown dd-btn px-2" name="data[SpecifikDiscount]">
								<option value="0">Specifik plan</option>
								<option value="1">Premium</option>
								<option value="2">Entreprise</option>
								<option value="3">Premium & Entreprise</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 mt-5">
					<div class="form-group m-2 mb-4">
						<label for="FastDiscount"> <p class="text-dark m-0 rubrik">Rabat pris</p></label>
						<input class="form-control" placeholder="Indtast din pris her" type="number" name="data[FastDiscount]"  id="FastDiscount">
					</div>
				</div>

				<div class="col-12 col-md-6 mt-5">
					<div class="form-group m-2 mb-4">
						<label for="coupon_code"> <p class="text-dark m-0 rubrik">Rabat procent</p></label>
						<input class="form-control" placeholder="Indtast din procent her" type="text" name="data[ProcentDiscount]"  id="ProcentDiscount">
					</div>
				</div>

				<div class="col-12 col-md-6">
					<div class="form-group m-2">
						<label for="DateDiscount"><p class="text-dark m-0 rubrik">Fra dato</p></label>
						<input class="form-control " type="date" name="data[DateDiscount]"  id="DateDiscount">
					</div>
				</div>

				<div class="col-12 col-md-6">
					<div class="form-group m-2">
						<label for="SlutDiscount"> <p class="text-dark m-0 rubrik">Til dato</p></label>
						<input class="form-control" type="date" name="data[SlutDiscount]"  id="SlutDiscount">
					</div>
				</div>
		</div>
			<div class="col-12 col-md-6 d-flex">
				<div class="col-12 mt-5 d-flex justify-content-center">
					<div class="d-flex justify-content-center align-items-center">
						<button class="form-control btn btn-primary bg-gradient rounded-0 border-0"  id="btn-rabat">Oversigt</button>
					</div>
				</div>
				<div class="col-12 mt-5 d-flex justify-content-center">
					<div class="d-flex justify-content-center align-items-center">
						<button class="form-control btn btn-primary bg-gradient rounded-0 border-0" type="submit" id="btn-submit">Submit</button>
					</div>
				</div>
		</div>
	</div>
</div>
</form>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
