<?php include('sessionstart.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="citysports.php">City Sports</a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="todaysDeal.php">Today's Deals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sell</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">ALL</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Esports</a>
                        <a class="dropdown-item" href="football.php">Football</a>
                        <a class="dropdown-item" href="#">Fitness</a>
                        <a class="dropdown-item" href="vollyball.php">Vollyball</a>
                        <a class="dropdown-item" href="basketball.php">Basketball</a>
                        <a class="dropdown-item" href="cricket.php">Cricket</a>
                        <a class="dropdown-item" href="hockey.php">Hockey</a>
                        <a class="dropdown-item" href="mma.php">MMA</a>
                        <a class="dropdown-item" href="tennis.php">Tennis</a>
                    </div>
                </li>
                <form class="form-inline" method="GET" action="search.php">
                    <input name="search" class="form-control mr-sm-2" type="text" placeholder="Search" size="70">
                    <button type="button" class="fas fa-search btn btn-dark"></button>
                </form>
                <button type="button" class="btn btn-dark">Hello, Sign in</button>
            </ul>
        </div> 
        <a href="cart.php" id="cart" class="btn-light text-center btn btn-md" style="font-size:20px;">
            <span class="badge fas fa-shopping-cart">
                <?php
                if(isset($_SESSION["e-com"]))
                {
                    echo count($_SESSION["e-com"]);
                }
                else
                {
                    echo '0';
                } ?>
            </span>
        </a>
    </nav>
</body>
</html>