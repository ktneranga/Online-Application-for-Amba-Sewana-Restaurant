<?php session_start(); ?>
<?php include('inc/connection.php'); ?>
<?php include('inc/product_nav.php'); ?>

<!-- side-menu -->
<?php include('inc/side_menu.php'); ?>
<!-- side-menu -->

<?php 
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$idpro = $_GET['id'];
	$foodsql = "SELECT * FROM foods WHERE id = $idpro";
	$result = mysqli_query($connection, $foodsql);
	$foodrow = mysqli_fetch_assoc($result);
}else{
	header('Location:foods.php');
}

 ?>

<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div id="product-slider" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="<?=$foodrow['thumbnail']?>" class="d-block" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="<?=$foodrow['thumbnail']?>" class="d-block" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="<?=$foodrow['thumbnail']?>" class="d-block" alt="...">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>

			<div class="col-md-7">
				<p class="new-arrival text-center">NEW</p>
				<h2 class="food-title"><?php echo $foodrow['name']; ?></h2>
				<p>Product Code : ASFI0001</p>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>

				<p class="price">Rs. <?php echo number_format($foodrow['price'],2); ?></p>
				<form method="post" action="cart.php?action=addToCart&id=">
					<label>Quantity :</label>
					<input type="product-quantity" class="" name="quantity" id="quantity" value="1" size="2">
					<input type="hidden" name="id" id="id" value="<?php echo $foodrow['id']; ?>"><br>	
					<button type="submit" class="btn btn-primary" name="add">Add to Cart</button>
				</form>
				
			</div>

		</div>
	</div><!-- container -->
</section>

<!-- product description -->

<section class="product-description">
	<div class="container">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><h2 style="color: orange; font-size: 18px;">Food Description</h2></a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h2 style="color: orange; font-size: 18px;">Customer Reviews</h2></a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	<p class="description mt-2"><?php echo $foodrow['description'] ?></p>
	  </div>
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	  	<h6 class="mt-2" style="color: grey;">Reviews for <?php echo $foodrow['name']; ?></h6>
	  		<ul class="comment-list">
	  			<li class="mt-3 mb-3">	
	  				<div class="comment-meta">
	  					<a href="#">Sapna Madurangi</a>
						<span>
						<small>Feb 17, 2015, at 11:34</small>
						</span>
	  				</div>
	  				<div class="comment">
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  				</div>
	  			</li>

	  			<li class="mt-3 mb-3">	
	  				<div class="comment-meta">
	  					<a href="#">Sapna Madurangi</a>
						<span>
						<small>Feb 17, 2015, at 11:34</small>
						</span>
	  				</div>
	  				<div class="comment">
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  				</div>
	  			</li>

	  			<li class="mt-3 mb-3">	
	  				<div class="comment-meta">
	  					<a href="#">Sapna Madurangi</a>
						<span>
						<small>Feb 17, 2015, at 11:34</small>
						</span>
	  				</div>
	  				<div class="comment">
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  				</div>
	  			</li>
	  		</ul>
	  	<h6 class="mt-2" style="color: grey;">Add a Review</h6>
	  		<form >
			  <div class="form-row">
			    <div class="col">
			      <input type="text" class=" form-control" placeholder="First name" required="">
			    </div>
			    <div class="col">
			      <input type="text" class=" form-control" placeholder="Last name" required="">
			    </div>
			  </div>
			 <div class="form-group mt-4">
			  <textarea class="form-control" rows="5" placeholder="Enter Your Review Here..."></textarea>
			 </div>
			 <button type="submit" class="btn btn-warning" style="color: white;">Submit</button>
			</form>
	  </div>
	</div>
	</div>	
</section><!-- product-review -->

<section class="more-foods">
	<div class="container">
		<div class="title-box">
			<h2>Similar Foods</h2>
		</div><!-- title-box -->

		<div class="row">
			<div class="col-md-3">
				<div class="product-top">
					<img src="img/product/p1.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class="fa fa-heart-o"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
						</button>
					</div><!-- overlay-right -->
				</div><!-- product-top -->

				<div class="product-bottom text-center">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<h3>Sample Food</h3>
					<h5>Rs. 50.00</h5>
				</div><!-- product-bottom -->

			</div>

			<div class="col-md-3">
				<div class="product-top">
					<img src="img/product/p1.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class="fa fa-heart-o"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
						</button>
					</div><!-- overlay-right -->
				</div><!-- product-top -->

				<div class="product-bottom text-center">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<h3>Sample Food</h3>
					<h5>Rs. 50.00</h5>
				</div><!-- product-bottom -->

			</div>

			<div class="col-md-3">
				<div class="product-top">
					<img src="img/product/p1.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class="fa fa-heart-o"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
						</button>
					</div><!-- overlay-right -->
				</div><!-- product-top -->

				<div class="product-bottom text-center">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<h3>Sample Food</h3>
					<h5>Rs. 50.00</h5>
				</div><!-- product-bottom -->

			</div>

			<div class="col-md-3">
				<div class="product-top">
					<img src="img/product/p1.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class="fa fa-heart-o"></i>
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>
						</button>
					</div><!-- overlay-right -->
				</div><!-- product-top -->

				<div class="product-bottom text-center">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<h3>Sample Food</h3>
					<h5>Rs. 50.00</h5>
				</div><!-- product-bottom -->

			</div>
			
		</div><!-- row -->
	</div><!-- container -->
</section>


<?php include('inc/footer.php'); ?>

