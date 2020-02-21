<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- bootstrap css links -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body >


<div class="top-nav-bar">
	<div class="search-box">
		<i class="fa fa-bars" aria-hidden="true" id="menu-btn" onclick="openmenu()"></i>
		<i class="fa fa-times" aria-hidden="true" id="close-btn" onclick="closemenu()"></i>
		<a href="index.php"><img src="img/logo/logo1.png" class="logo"></a>
		<!-- <h2 class="logo">Amba Sewana</h2> -->
		<input type="text" name="search-box" class="form-control">
		</a><span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
	</div><!-- search-box -->
<div class="menu-bar">
	<ul>
		<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
		<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a></li>
		<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
	</ul>
</div><!-- menu-bar -->
</div><!-- top-nav-bar -->


<section class="header">
	<div class="side-menu" id="side-menu">
		<ul>
			<li>All <i class="fa fa-angle-right" aria-hidden="true"></i></li>
			<li>Food Item <i class="fa fa-angle-right" aria-hidden="true"></i>
				<ul>
					<li>Sub Item-1</li>
					<li>Sub Item-1</li>
					<li>Sub Item-1</li>
					<li>Sub Item-1</li>
				</ul>
			</li>
			<li>Food Item <i class="fa fa-angle-right" aria-hidden="true"></i>
				<ul>
					<li>Sub Item-2</li>
					<li>Sub Item-2</li>
					<li>Sub Item-2</li>
					<li>Sub Item-2</li>
				</ul>
			</li>
			<li>Food Item <i class="fa fa-angle-right" aria-hidden="true"></i>
				<ul>
					<li>Sub Item-2</li>
					<li>Sub Item-2</li>
					<li>Sub Item-2</li>
					<li>Sub Item-2</li>
				</ul>
			</li>

	</div><!-- side-menu -->


	<!-- ---------------slider--------------- -->

	<!-- <div class="slider">
		<div class="row">
			<div class="col-md-4" style="background-color: red; height: 60px;">
				
			</div>
			<div class="col-md-8" style="background-color: blue; height: 60px;">
				
			</div>
		</div>
	</div> --><!-- slider -->

</section>




<!-- bootstrap js links -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
	function openmenu(){
		document.getElementById("side-menu").style.display="block";
		document.getElementById("menu-btn").style.display="none";
		document.getElementById("close-btn").style.display="block";
	}

	function closemenu(){
		document.getElementById("side-menu").style.display="none";
		document.getElementById("menu-btn").style.display="block";
		document.getElementById("close-btn").style.display="none";
	}
</script>

</body>
</html>