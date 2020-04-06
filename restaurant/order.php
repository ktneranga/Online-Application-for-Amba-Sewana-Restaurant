<?php
    session_start();
?>


<?php 
include('inc/connection.php'); 
include('inc/dbcon.php');
include('inc/component.php');

// Remove Item from cart
if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value['id'] == $_POST['id']){
            unset($_SESSION['cart'][$key]);
            echo "<script>alert('Product is removed from the cart..!')</script>";
            echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}
?>

<!-- Create Session 'cart' -->
<?php
if (isset($_POST["add"])){
    $productId = $_POST["id"];
    $productQty = $_POST["quantity"];

    if (in_array($productId, $_SESSION['cart'])) {
        echo "<script>alert('This Dish is already in the cart..!')</script>";
        echo "<script>window.location = 'foods.php'</script>";
    }
    else{
        //array_push($_SESSION['cart'], $productid);
        array_push($_SESSION['cart'], array('id' => $productId , 'qty' => $productQty));
        echo "<script>alert('Your Dish is now in the cart..!')</script>";
        echo "<script>window.location = 'foods.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Order</title>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/form-style.css">
	<link rel="stylesheet" type="text/css" href="css/style_shoping_table.css">
	<!-- bootstrap css links -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- slick css -->
  	<link rel="stylesheet" type="text/css" href="css/slick.css">

	<style type="text/css">
		#menu-btn{
			display: inline;
		}
		.side-menu{
			z-index: 20;
			/*top: 133px;*/
			position: fixed;
			/*font-size: 12px;*/
			display: none;
			box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.9);
		}
	</style>

</head>
<body>


<div class="top-nav-bar">
	<div class="search-box">
		<i class="fa fa-bars" aria-hidden="true" id="menu-btn" onclick="openmenu()"></i>
		<i class="fa fa-times" aria-hidden="true" id="close-btn" onclick="closemenu()"></i>
		<a href="index.php" title="Home"><img src="img/logo/logo1.png" class="logo"></a>
		<!-- <h2 class="logo">Amba Sewana</h2> -->
		<!-- <input type="text" name="search-box" class="form-control">
		</a><span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span> -->
	</div><!-- search-box -->
<div class="menu-bar">
	<ul>
		<li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
            <?php
                if(!empty($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<span id='cart_count' class='text-danger bg-light' style='border-radius: 3px;padding:1px;margin-left: 4px;'>$count</span>";
                }else{
                    echo " ";
                }
            ?>
        </a></li>
    <?php if (!empty($_SESSION['user_id'])) { ?>
      <!-- loged in user items go here -->
      <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Hi <?php echo $_SESSION['first_name']; ?></a></li>
    <?php } else{ ?>
      <!-- non logged in user items go here -->  
		  <li><a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a></li>
     <?php } ?>

     <?php if (!empty($_SESSION['user_id'])) { ?>
      <!-- loged in user items go here -->
      <li><a href="logout.php" data-toggle="modal" data-target="#error_modal"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li> 
    <?php } else{ ?>
      <!-- non logged in user items go here -->  
      <li><a href="#" data-toggle="modal" data-target="#registerModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
     <?php } ?>

		
	</ul>
</div><!-- menu-bar -->
</div><!-- top-nav-bar -->

<!-- login modal start -->
<?php include('inc/login_modal.php'); ?>
<!-- login modal end -->

<?php include('inc/logout_error.php'); ?>

<!-- sign up modal start -->
<?php include('inc/register_modal.php'); ?>
<!-- sign up moda end -->

<!-- side-menu -->
<?php include('inc/side_menu.php'); ?>
<!-- side-menu -->

<!-- Shopping cart item table-->

<div class="container-fluid" style="
    padding-bottom: 212px;">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">

                <!-- Get food ditails from DB using sessioin 'cart' -->
                <?php

                    if(!empty($_SESSION['cart'])){
                        
                        $total = 0;
                        
                        if(isset($_SESSION['cart'])){
                            foreach ($_SESSION['cart'] as $key=>$value) {
                                $foodId = $value['id'];
                                $foodQty = $value['qty'];
                                $sql = "SELECT * FROM foods WHERE id = $foodId;";
                                $result = mysqli_query($connection, $sql);
                                $resultCheck = mysqli_num_rows($result);

                                if($resultCheck > 0){
                                    while ($row = mysqli_fetch_assoc($result)){

                                        $productid = $row['id'];
                                        $productname = $row['name'];
                                        $productprice = $row['price'];
                                        $productimg = $row['thumbnail'];
                            
                                        //calculate total price
                                        $total = $total + (int)$productprice*(int)$foodQty;

                                    }
                                }
                            }
                        }
                    }else{
                        echo "<h3 style = \"margin-left: 379px; margin-top: 80px; \">Cart is empty!</h3>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Order details -->

<div style="top: -220px;position: relative; left: 182px; width: 950px;">
    <div class="pt-4">
        <h6>ORDER DETAILS</h6>
        <hr>
        <div class="row price-details">
            <div class="clear-fix"></div>
            <table border='1' cellspacing='0'>
                <tr>
                    <th width=250>Food dish</th>
                    <th width=80>Amount</th>
                    <th width=100>Unit price</th>
                    <th width=100>Total price</th>
                </tr>
 
            <?php
 
            for($a=0;$a<5;$a++) {
                    $description = $articles[0][$a];
                    $amount = $articles[1][$a];
                    $unit_price = number_format( $articles[2][$a], 2);
                    $total_price = number_format( $amount * $unit_price, 2);
                    $total += $total_price;
                    echo("<tr>");
                    echo("<td>$description</td>");
                    echo("<td class='text-center'>$amount</td>");
                    echo("<td class='text-right'>€$unit_price</td>");
                    echo("<td class='text-right'>€$total_price</td>");
                    echo("</tr>");
            }
             
            echo("<tr>");
            echo("<td colspan='3' class='text-right'>Sub total</td>");
            echo("<td class='text-right'>€" . number_format($total,2) . "</td>");
            echo("</tr>");
            echo("<tr>");
            echo("<td colspan='3' class='text-right'>VAT</td>");
            echo("<td class='text-right'>€" . number_format(($total*$vat)/100,2) . "</td>");
            echo("</tr>");
            echo("<tr>");
            echo("<td colspan='3' class='text-right'><b>TOTAL</b></td>");
            echo("<td class='text-right'><b>€" . number_format(((($total*$vat)/100)+$total),2) . "</b></td>");
            echo("</tr>");
            ?>
            </table>
        </div>
            <div class="col-md-6">
                <a href="index.php"><button type="submit" class="btn btn-danger" name="submit" style="position: relative; left: 410px; top: 45px;">Place the order</button></a>

            </div>
        </div>
    </div>
</div>


</body>

<!--end of shopping cart item table-->
<footer><?php include('inc/footer.php'); ?></footer>

</html>