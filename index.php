<?php
require "settings/init.php";

$coupon = $db->sql("SELECT * FROM `coupon` WHERE couponId=1");
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <?php

    foreach ($coupon as $coupon){
    ?>




    <title></title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-dark">


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




        <?php
              }
        ?>