<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('header.php'); ?>
    <title>Hockey</title>
</head>
<body>
    <?php include('navbar.php'); ?>
    <br>
    <div class="container-fluid">
        <div class="card-deck" style="width:500px;">
        <?php
        $query_hockey = " SELECT * FROM products WHERE category='hockey' ";
        $result_hockey = mysqli_query($connect, $query_hockey);
        while($row_hockey = mysqli_fetch_array($result_hockey))
        { ?>
        <div class="card">
        <div class="card-body">
            <img href="#" class="img-responsive" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_hockey['image']); ?>">
            <h4 href="#" class="card-title"><?php echo $row_hockey['name']; ?></h4>
            <p href="#" class="card-text">PKR <?php echo $row_hockey['price']; ?></p>
            <p href="#" class="text-success">In Stock : <?php echo $row_hockey['in_stock']; ?></p>
            Qty : <input type="number" name="quantity" id="quantity<?php echo $row_hockey["id"]; ?>" style="width:50px;" value="1" min="0" max="<?php echo $row_hockey['in_stock'] ?>">
            <input type="hidden" name="hidden_name" id="name<?php echo $row_hockey["id"]; ?>" value="<?php echo $row_hockey["name"]; ?>">  
            <input type="hidden" name="hidden_price" id="price<?php echo $row_hockey["id"]; ?>" value="<?php echo $row_hockey["price"]; ?>">  
            <input type="button" name="add_to_cart" id="<?php echo $row_hockey["id"]; ?>" style="margin-top:5px;" class="btn btn-dark form-control add_to_cart" value="Add to Cart">
        </div>
        </div>
        <?php 
        }
        require('jq.php'); 
        ?>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>