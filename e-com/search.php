<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('header.php'); ?>
</head>
<body>
    <?php include('navbar.php');
    $searched_word = $_GET['search']; ?>
    <div class="container-fluid">
    <?php
    if($searched_word)
    {
        $query_searched_word = " SELECT * FROM products Where name LIKE '%$searched_word%' "; //searh for word
        $result_searched_word = mysqli_query($connect,$query_searched_word);
        $found_searched_word = mysqli_num_rows($result_searched_word); //counts number of rows of result found
        echo "'$found_searched_word' results found"; // prints results found
        while($row_searched_word = mysqli_fetch_assoc($result_searched_word))
        { ?>
        <div class="card-deck">
        <div class="card">
        <div class="card-body">
            <img href="#" class="img-responsive" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_searched_word['image']); ?>">
            <h4 href="#" class="card-title"><?php echo $row_searched_word['name']; ?></h4>
            <p href="#" class="card-text">PKR <?php echo $row_searched_word['price']; ?></p>
            <p href="#" class="text-success">In Stock : <?php echo $row_searched_word['in_stock']; ?></p>
            Qty : <input type="number" name="quantity" id="quantity<?php echo $row_searched_word["id"]; ?>" style="width:50px;" value="1" min="0" max="<?php echo $row_searched_word['in_stock'] ?>">
            <input type="hidden" name="hidden_name" id="name<?php echo $row_searched_word["id"]; ?>" value="<?php echo $row_searched_word["name"]; ?>">  
            <input type="hidden" name="hidden_price" id="price<?php echo $row_searched_word["id"]; ?>" value="<?php echo $row_searched_word["price"]; ?>">  
            <input type="button" name="add_to_cart" id="<?php echo $row_searched_word["id"]; ?>" style="margin-top:5px;" class="btn btn-dark form-control add_to_cart" value="Add to Cart">
        </div>
        </div>
        </div>
    <?php 
        }
        require('jq.php');
    }
    elseif(empty($searched_word))
    {
        echo "no match found : /";
    }
    ?>
    </div>
</body>
</html>