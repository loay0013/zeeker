<?php
require "settings/init.php";
if(!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;
    if (!empty($file["FilmImg"]["tmp_name"])) {
        move_uploaded_file($file["FilmImg"]["tmp_name"], "uplods/" . basename($file["FilmImg"]["name"]));
    }

    $sql = "INSERT INTO zeeker (coupon_code,discount,Fast_discount,Date_discount,M_discount,B_discount, Uses_discount) values (:coupon_code,:discount,:Fast_discount,:Date_discount, :M_discount, :B_discount,:Uses_discount, :Slut_date)";
    $bind = [":coupon_code" => $data["coupon_code"], ":discount" => $data["discount"], ":Fast_discount" => $data["Fast_discount"], ":Date_discount" => $data["Date_discount"], ":M_discount" => $data["M_discount"], ":B_discount" => $data["B_discount"], ":Uses_discount" => $data["Uses_discount"], ":Slut_date" => $data["Slut_date"]];
    $db->sql($sql, $bind, false);

    echo "<body style='font-size: 2rem; background-color: #000000; '></body>

       <p style='color: white; text-align: center; margin-top: 20%;' >Rabat Kode er nu indsat.<p/>
       <div style='display: flex; justify-content: center;'>
       <button style='display:flex; justify-content:center; padding: 10px '>
       <a  style='text-decoration: none; color: black;' href='insert.php' >Indsat en film mere</a></button></div>
       <a style='display: flex; justify-content: center; color: white; padding-top: 20px; text-decoration: none' href='#'>Til Film side</a>
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
    <title> Zeeker rabat</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<nav class="col-12">
    <img class="col-6" href="">
    <div>
        <p>

        </p>
    </div>

</nav>
<form method="post" action="insert.php" enctype="multipart/form-data">

    <div class="row justify-content-center m-0">

    <div class="col-12">
        <div class="form-group m-2">
            <label for="coupon_code"> <p class="text-dark m-0">Coupon code</p></label>
            <textarea class="form-control " type="text" name="data[coupon_code]"  id="coupon_code" ></textarea>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group m-2">
            <label for="coupon_code"> <p class="text-dark m-0">Coupon code</p></label>
            <textarea class="form-control " type="text" name="data[coupon_code]"  id="coupon_code" ></textarea>
        </div>
    </div>


</div>
</form>

</body>
</html>
