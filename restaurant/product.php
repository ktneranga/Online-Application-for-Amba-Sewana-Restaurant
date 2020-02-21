<?php session_start(); ?>

<?php include('inc/product_nav.php'); ?>

<section class="header">
	<div class="side-menu" id="side-menu">
		<ul>
			<li><a href="index.php">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			<li><a href="">Foods <i class="fa fa-angle-right" aria-hidden="true"></a></i>
				<ul>
					<li><a href="">Category</a></li>
					<li><a href="">Category</a></li>
					<li><a href="">Category</a></li>
					<li><a href="">Category</a></li>
				</ul>
			</li>
			<li><a href="">My Account <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				<ul>
					<li><a href="">My Orders</a></li>
					<li><a href="">Log Out</a></li>
				</ul>
			</li>
			<li><a href="track.php">Track Order <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				
			</li>

			<li><a href="reserve.php">Reserve Tables <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				
			</li>

			<li><a href="contact.php">Contact <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				
			</li>

	</div><!-- side-menu -->

<!-- single product -->

<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div id="product-slider" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="img/product/p1.jpg" class="d-block" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="img/product/p1.jpg" class="d-block" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="img/product/p1.jpg" class="d-block" alt="...">
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
				<h2 class="food-title">Sample Food Title</h2>
				<p>Product Code : ASFI0001</p>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>

				<p class="price">Rs.150.00</p>
				<form>
				<label>Quantity :</label>
				<input type="numer" name="qty" class="" value="1"><br>	
				<button type="submit" class="btn btn-primary">Add to Cart</button>
				</form>
				
			</div>

		</div>
	</div><!-- container -->
</section>

<!-- product description -->

<section class="product-description">
	<div class="container">
		<h2>Food Description</h2>
		<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div><!-- container -->
</section>

<!-- similar foods -->

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