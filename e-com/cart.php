<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Your Cart</title>
</head>
<body>
     <?php 
     include('navbar.php');
     ?>
     <br>
     <div class="container-fluid">
         <div id="cart">
             <div class="table-responsive" id="order_table">
                 <table class="table table-bordered">
                     <tr>
                         <th width="40%">Product Name</th>  
                         <th width="10%">Quantity</th>  
                         <th width="20%">Price</th>  
                         <th width="15%">Total</th>  
                         <th width="5%">Action</th>  
                    </tr>
                    <?php  
                    if(!empty($_SESSION["e-com"]))  
                    {
                         $total = 0;  
                         foreach($_SESSION["e-com"] as $keys => $values)
                         { ?>
                         <tr>
                             <td><?php echo $values["product_name"]; ?></td>  
                             <td><input type="number" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                             <td align="right">PKR <?php echo $values["product_price"]; ?></td>  
                             <td align="right">PKR <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  
                             <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                         </tr>  
                         <?php  
                         $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                         }  ?>
                         <tr>
                              <td colspan="3" align="right">Total</td>  
                              <td align="right">PKR <?php echo number_format($total, 2); ?></td>  
                              <td></td>  
                         </tr>  
                         <tr>  
                              <td colspan="5" align="center">  
                                   <form method="post" action="cart.php">  
                                        <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                                   </form>  
                              </td>  
                         </tr>
                         <?php 
                         }
                         require('jq.php');
                         ?>  
                    </table>  
               </div>  
          </div>  
     </div>  
     </div>  
</body>  
</html>  