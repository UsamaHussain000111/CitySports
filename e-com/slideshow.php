<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .carousel-inner img 
    {
        width: 100%;
        height: 100%; 
    }
    </style>
</head>
<body>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="tennis.php">
                <img src="images/slide/power.jpg" alt="tennis" width="1100" height="500">
                </a>
            </div>
            <div class="carousel-item">
                <a href="mma.php">
                <img src="images/slide/boxing_gloves_alter.jpg" alt="mma" width="1100" height="500">
                </a>
            </div>
            <div class="carousel-item">
                <img src="images/slide/shop_by_sports_alter.jpg" alt="shop_by_sport" width="1100" height="500">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <br>
    
</body>
</html>