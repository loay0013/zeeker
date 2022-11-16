<?php
require "settings/init.php";
$bind =[":couponId"=> $_GET["couponId"]];
$coupon = $db->sql("SELECT * FROM coupon WHERE  couponId =:couponId;", $bind);
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <?php

    foreach ($coupon as $coupon){

    ?>





    <title>Rabatkode Info</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-bodyrabatkode">

    <div class="w-md-50 bg-rabatkode h-100 container mt-5 rounded-2 ">
        <p class="text-center pt-3">
            Rabat navn:
            <?php
            echo $coupon->CouponNavn
            ?>
        </p>
    <div class="bg-bodyrabatkode container mt-5 p-4 rounded-2 w-md-50">
        <div id="myInput">
            <p id="myInput">
                Status: Aktiv
            </p>

           <p>
               Start dato:
               <?php
               echo $coupon->DateDiscount
               ?>
           </p>
            <p id="myInput">
                Slut dato:
                <?php
                echo $coupon->SlutDiscount
                ?>
            </p>

            <p id="myInput">
                CVR. nr.:
                <?php
                echo $coupon->CvrDiscount
                ?>
            </p>

            <p id="myInput">
                Bindingsperiode:
                <?php
                echo $coupon->BindDiscount
                ?>
            </p>

            <p id="myInput">
                Rabat procent:
                <?php
                echo $coupon->ProcentDiscount
                ?>
            </p>

            <p id="myInput">
                Rabat pris:
                <?php
                echo $coupon->FastDiscount
                ?>
            </p>

            <p id="myInput">
                Specifik plan:
                <?php
                echo $coupon->SpecifikDiscount
                ?>
            </p>

            <p>
                Antal gratis måneder:
                <?php
                echo $coupon->MonthDiscount
                ?>
            </p>

            <p id="myInput">
                Rabatkode:
                <?php
                echo $coupon->CouponCode
                ?>
            </p>
        </div>

        <div class="d-flex justify-content-end">

                 <svg xmlns="http://www.w3.org/2000/svg" width="18.03" height="24.04" viewBox="0 0 18.03 24.04">
                    <path id="Icon_awesome-clipboard" data-name="Icon awesome-clipboard" d="M18.03,5.259V21.786a2.254,2.254,0,0,1-2.254,2.254H2.254A2.254,2.254,0,0,1,0,21.786V5.259A2.254,2.254,0,0,1,2.254,3H6.01a3,3,0,0,1,6.01,0h3.756A2.254,2.254,0,0,1,18.03,5.259ZM9.015,1.878A1.127,1.127,0,1,0,10.142,3,1.127,1.127,0,0,0,9.015,1.878m4.507,5.353V6.292a.282.282,0,0,0-.282-.282H4.789a.282.282,0,0,0-.282.282v.939a.282.282,0,0,0,.282.282h8.451A.282.282,0,0,0,13.522,7.231Z" fill="#cdcecf"/>
                </svg>

        </div>

    </div>
        <div class="d-flex justify-content-center mt-5 pb-5 col-12 flex-column flex-md-row">
            <div class="m-3 col-md-6 col-12 d-flex justify-content-center">
                <a href="index.html">
                    <button class="btn btn-primary border-0 rounded-4 " id="btn-submit">
                         Tilbage
                    </button>
                </a>
            </div>
        <div class="m-3 col-md-6 col-12 d-flex justify-content-center">
            <a href="#">
                <button class="btn-primary btn border-0 rounded-4" id="btn-slet">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.63" height="22.929" viewBox="0 0 18.63 22.929">
                        <path id="Icon_metro-bin" data-name="Icon metro-bin" d="M5.932,9.093V23.424a1.437,1.437,0,0,0,1.433,1.433h12.9A1.437,1.437,0,0,0,21.7,23.424V9.093H5.932Zm4.3,12.9H8.8V11.959h1.433Zm2.866,0H11.664V11.959H13.1Zm2.866,0H14.53V11.959h1.433Zm2.866,0H17.4V11.959h1.433Zm3.224-17.2H17.4V3a1.078,1.078,0,0,0-1.075-1.075H11.306A1.078,1.078,0,0,0,10.231,3V4.794H5.574A1.078,1.078,0,0,0,4.5,5.869V7.66h18.63V5.869a1.078,1.078,0,0,0-1.075-1.075Zm-6.091,0h-4.3V3.379h4.3V4.794Z" transform="translate(-4.499 -1.928)" fill="#fff"/>
                    </svg>
                </button>
            </a>
        </div>
        </div>
    </div>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




        <?php
              }
        ?>