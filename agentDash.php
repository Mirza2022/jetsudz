<?php

session_start();
require_once('./config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jetsudz</title>
    <link rel="icon" href="img/Logo-01.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- DataTable link -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/date-1.2.0/r-2.4.0/rg-1.3.0/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.css" />

    <!-- Local CSS link-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="mainContainer">
    <!-- Header/Navigation Bar Content -->
    <?php
    include "view/header.php";
    ?>
    <main>
        <!-- Home Page Content -->

        <div class="row mt-5 ms-3 me-3 my-5">
            <div class="col-1 px-0">
                <ul class="nav flex-column border-end border-top border-bottom">
                    <li class="nav-item">
                        <a class="nav-link disabled" style="color:#36df66; font-size:18px;" aria-current="page" href="#">QUICK LINKS</a>
                    </li>
                    <li class="nav-item">
                        <span class="sideNav"><a class="nav-link sideNav" href="#adminServices" onclick="toggleService()">My Services</a></span>
                    </li>
                    <li class="nav-item">
                        <span class="sideNav"><a class="nav-link sideNav" href="#scheduledBooking" onclick="toggleSchedule()">Scheduled</a></span>
                    </li>
                    <li class="nav-item">
                        <span class="sideNav"><a class="nav-link sideNav" href="#emergencyBooking" onclick="toggleEmergency()">Emergencies</a></span>
                    </li>
                    <li class="nav-item">
                        <span class="sideNav"><a class="nav-link sideNav" href="#adminEvents" onclick="toggleEvent()">My Events</a></span>
                    </li>
                    <li class="nav-item">
                        <span class="sideNav"><a class="nav-link sideNav" href="#adminProfile">Profile</a></span>
                    </li>
                </ul>
            </div>
            <div class="col-11">
                <?php
                include "view/agentCharts.php";
                include "view/agentServices.php";
                include "view/agentSchedules.php";
                include "view/agentEmergency.php";
                include "view/agentEvents.php";
                ?>
            </div>
        </div>

        <?php
        include "view/footer.php";
        //include "test2.php";
        ?>
    </main>
    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- chart JS link -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Google Maps JS link -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhElaOflPQkYWZlClm-7qCEvSZWZK7Bjg&callback=initMap&v=weekly" defer></script>

    <!-- jQuery link -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Bootstrap Popper JS link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <!-- DataTable JS links -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/date-1.2.0/r-2.4.0/rg-1.3.0/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/charts.js"></script>


</body>

</html>