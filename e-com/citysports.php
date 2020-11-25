<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Sports</title>
</head>
<body>
    <?php
    include('header.php'); 
    include('navbar.php');
    include('slideshow.php'); 
    ?>
    <!--these are 4 cards on front page -->
    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Buy Nike Products</h4>
                <img class="card-img-top" src="images/homeImages/nike.jpg" alt="Card image">
            </div>
            <a href="nike.php" style="padding:20px">Shop now</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Esports</h4>
                <img class="card-img-top" src="images/homeImages/esports.jpg" alt="Card image">
            </div>
            <a href="#"  style="padding:20px">See more</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Today's Deal</h4>
                <img class="card-img-top" src="images/homeImages/deals.jpg" alt="Card image">
            </div>
            <a href="#"  style="padding:20px">Shop now</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Get fit at home</h4>
                <img class="card-img-top" src="images/homeImages/get_fit_home.jpg" alt="Card image">
            </div>
            <a href="#"  style="padding:20px">Explore now</a>
        </div>
    </div>
    <br>
    <?php include('footer.php'); ?>
</body>
</html>