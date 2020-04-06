<section class="header">
	<div class="side-menu" id="side-menu">
		<ul>
			<li><a href="index.php">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			<li><a href="">Foods <i class="fa fa-angle-right" aria-hidden="true"></a></i>
				<ul>
					<li><a href="foods.php?">All</a></li>

					<?php 

					$cat_query = "SELECT * FROM category";
					$cat_result = mysqli_query($connection, $cat_query);

					while($row = mysqli_fetch_assoc($cat_result)){

					 ?>

					<li><a href="foods.php?id=<?php echo $row['id'];?>&name=<?php echo $row['category']; ?>"><?php echo $row['category']; ?></a></li>

				<?php } ?>

				</ul>
			</li>
			<li><a href="">My Account <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				<ul>
					<li><a href="myorders.php">My Orders</a></li>
					<li><a href="logout.php" data-toggle="modal" data-target="#error_modal">Log Out</a></li>
				</ul>
			</li>
			<li><a href="track.php">Track Order <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				
			</li>

			<li><a href="reserve.php">Reserve Tables <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				
			</li>

			<li><a href="cart.php">Cart <?php
				if(!empty($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<span id='cart_count' class='text-danger bg-light' style='border-radius: 3px;padding:1px;margin-left: 4px;'>$count</span>";
                }else{
                    echo " ";
                }
			?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				
			</li>

			<li><a href="contact.php">Contact <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				
			</li>
		</ul>	
	</div><!-- side-menu -->


	<!-- ---------------slider--------------- -->

	<div class="slider">
		<div id="slider" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#slider" data-slide-to="0" class="active"></li>
	    <li data-target="#slider" data-slide-to="1"></li>
	    <li data-target="#slider" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/slider1.jpg" class="d-block w-100" alt="..." >
	      <div class="carousel-caption d-none d-md-block">
	        <h5>First slide label</h5>
	        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/slider2.jpg" class="d-block w-100" alt="..." >
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Second slide label</h5>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/slider3.jpg" class="d-block w-100" alt="..." >
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Third slide label</h5>
	        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
	      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>	
	</div><!-- slider -->

</section>