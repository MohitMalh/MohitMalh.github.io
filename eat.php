<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tour 701 Project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.1/angular.js'></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="jquery-ui.structure.css" type="text/css">
	<link rel="stylesheet" href="jquery-ui.structure.min.css" type="text/css">
	<link rel="stylesheet" href="jquery-ui.theme.css" type="text/css">
	<link rel="stylesheet" href="jquery-ui.theme.min.css" type="text/css">
	
	<script type="text/javascript" src="login.js"></script>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	
	<style>
	.logo{width:120px; height:120px;}
	
	#logoheading{font-family:"Times New Roman","Times","Serif";font-weight:bold;color:blue;font-size:3em;}
	#submit{background-image:url(button.png);width:110px;height:45px;}
	#submitbut{padding-left:70px;}
	.ui-dialog .ui-state-error{padding: .3em;}
	.validateTips{border: 1px solid transparent;padding: 0.3em;}
	#myBanner{position:relative;alignment-adjust: center;}
	#myBanner img{display:none;height:100%;width:100%;}
	#myBanner img.active{display:block;}
	svg{border: 2px solid;}
	#eat{background-image:url(salmon.jpg);}
	#drink{background-image:url(cocktail.jpg);}
	#tour{background-image:url(tour.jpg);}
	#museum{background-image:url(museum.jpg);}
	
	</style>
	<script>
	function slider()
	{
		var $active = $('#myBanner .active');
		var $next =($('#myBanner .active').next().length > 0)?$('#myBanner .active').next():$('#myBanner img:first');
		$active.fadeOut(function()
		{
			$active.removeClass('active');
			$next.fadeIn().addClass('active');
		});
	}
	$(document).ready(function()
	{
		setInterval('slider()', 5000);
	});
	$(document).ready(function()
	{
		$(".logout").click(function()
		{
			window.location="logout.php"
	
		});
		
	});
	</script>
	<script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>
  <style type="text/css">
		.wrappedElement {
		  border: 1px solid red;
		  background-color: cyan;
		}
  
		.img-circle.wrappedElement {
		  border-color: brown;
		  border-width: 4px;
		}
     </style>
     
    
    </script>
    <!-- On Document Load -->
    <script language="javascript">
	 $(function() {
	  $(".img-circle").hover(
	     function() {
		  $(this).addClass("wrappedElement");
	     },
	     function() {
		  $(this).removeClass("wrappedElement");
	     }
	   )
	 });
	 $(document).ready(function()
	 	{
	 		$("#back").click(function(e)
	 		{
	 			window.location.href="eat.php";
	 		})
	 		$("#indian1").click(function(e)
	 		{
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJvVILJW1644kR9yD6YaMKlVA&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
				$("#back").show();

	 		});
	 		$("#indian2").click(function(e)
	 		{
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJrQ0EVF1344kRVpRToR8J-ew&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#indian3").click(function(e)
	 		{
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJa3denw9644kRFTT5EfLQcbo&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#indian4").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJu0w8-FN344kR67FsqG-6GGc&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#mexican1").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJISIZdw9644kRNOGeYZAlOCU&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#mexican2").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ7U-WqIJ644kRnTwyhVFYzqc&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#mexican3").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ52lBCoB644kRPha9qnX2FUY&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#mexican4").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ1SGgo_V544kRmGe2qAAC1x0&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#italian1").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJVbrdD4lw44kRdZLKJo0e02o&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#italian2").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJAXXx0Yhw44kRgOgYa9xlDyw&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#italian3").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ2TpYSRJ644kRA7tBGF495Z4&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#italian4").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJt0c8Twx644kRU7qhHYey8hU&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#pub1").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJHTF784Vw44kRgfkpGmXBtic&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#pub2").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJWzP8_kl444kRuK72aSDEAzY&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#pub3").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJNzYxP-h544kRImUqbH8EMlY&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		$("#pub4").click(function(e){
	 			$("#accordion").html('<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ-clIT2Z544kR5czydwtt7qI&key=AIzaSyCb4PDH0UN47ZsYvvMVzuY0TUKRJzDiXAw" allowfullscreen></iframe>');
	 			$("#back").show();
	 		})
	 		
	 	});

    </script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<img class="logo" src="logo_front.png">
			</div>
			<div class="col-md-4">
				<h1 id="logoheading">BOSTON TRAVELS</h1>
			</div>
			<div class="col-md-2" style="padding-top:20px">
				<h4>
				<?php
				 if (isset($_SESSION['email']))
					{
					echo $_SESSION['email'];?>
					<script type="text/javascript">
					$(document).ready(function()
					{
						$("#submit").hide();
						$(".logout").show();
						$(".signup").hide();
						$(".loggedin").show();
					});
					</script><?php
				}
				else
				{
					echo"HELLO GUEST";
				}
				?> 
			</h4>
			</div>
			<div class="col-md-1">
				<br><button  id="submit"></button>
				<input type="image" src="logout.png" class="logout" alt="logout" name="logout"  style="display:none;">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12" id="myBanner">
				<img src="Boston_Banner.jpg" class="active" alt="Boston_banner_travel">
				<img src="Boston_fall1.jpg" alt="Boston_banner_travel">
				<img src="Boston_fall.jpg" alt="Boston_banner_travel">						
				<img src="boston_downtown.jpg" alt="Boston_banner_travel">
				<img src="Boston_Harbor_islands.jpg" alt="Boston_banner_travel">
				<img src="Boston_South_end.jpg" alt="Boston_banner_travel">
			</div>
		</div>
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tours<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="Eat.html">Restaurants And Pubs</a></li>
							<li><a href="Museum.html">Museum</a></li>
			            	<li><a href="Tours.html">Tours</a></li>
						</ul>
					</li>
					<li><a href="SignUp.html">Sign-Up</a></li>
			        <li><a href="ContactUs.html">Contact Us</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
			</div>
		</nav>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-1">
				<img src="eat.png" alt="food">
				<br>
				<h3>&nbsp; EAT</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-1">
				<img src="tours.png" alt="Tours">
			  	<br>
			  	<h3>TOURS</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-1">
				<img src="museum.png" alt="Museum">
			  	<br>
			  	<h3>MUSEUM</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-1">
				<img src="beer-logo.png" alt="drink" >
			  	<br>
			  	<h3>DRINK</h3>
			</div>
		</div>
	</div>
	<div class="container">
		<img src="back.gif" alt="back" id="back" style="display:none;">
		<div class="jumbotron">
			<div id="accordion">
				<h3>Indian Restaurants</h3>
				<div>
					<p>
						TOP  INDIAN RESTAURANTS
						<div class="row">
							<div class="col-md-3">
								<img src="indian_mela.jpeg" id="indian1" class="img-circle" alt="Indian Restaurant1" width="200" height="200">
								<br>
								<h4>MELA</h4>
							</div>
							<div class="col-md-3">
								<img src="Maharaja.jpg" id="indian2" class="img-circle" alt="Indian Restaurant2" width="200" height="200">
								<br>
								<h4>MAHARAJA</h4>
							</div>
							<div class="col-md-3">
								<img src="Kashmir.jpg" id="indian3" class="img-circle" alt="Indian Restaurant3" width="200" height="200">
								<br>
								<h4>KASHMIR</h4>
							</div>
							<div class="col-md-3">
								<img src="dosa-factory.jpg"  id="indian4" class="img-circle" alt="Indian Restaurant4" width="200" height="200">
								<br>
								<h4>DOSA FACTORY</h4>
							</div>
						</div>
					</p>
				</div>
				<h3>MEXICAN RESTAURANTS</h3>
				<div>
					<p>
						TOP MEXICAN RESTAURANTS
						<div class="row">
							<div class="col-md-3">
								<img src="casaROmero.jpg" id="mexican1" class="img-circle" alt="mexican Restaurant1" width="200" height="200">
								<br>
								<h4>CASA ROMERO</h4>
							</div>
							<div class="col-md-3">
								<img src="temazcal.jpg" id="mexican2" class="img-circle" alt="mexican Restaurant2" width="200" height="200">
								<br>
								<h4>TEMAZCAL TAQUERIA CANTINA</h4>
							</div>
							<div class="col-md-3">
								<img src="papagayo.png" id="mexican3" class="img-circle" alt="mexican Restaurant3" width="200" height="200">
								<br>
								<h4>PAPAGAYO</h4>
							</div>
							<div class="col-md-3">
								<img src="elpelon.jpg"  id="mexican4" class="img-circle" alt="mexican Restaurant4" width="200" height="200">
								<br>
								<h4>EL PELON TAQUERIA</h4>
							</div>
						</div>
					</p>
				</div>
				<h3>ITALIAN RESTAURANTS</h3>
				<div>
					<p>
						TOP ITALIAN RESTAURANTS
						<div class="row">
							<div class="col-md-3">
								<img src="Mamma-Maria.jpg" id="italian1" class="img-circle" alt="italian Restaurant1" width="200" height="200">
								<br>
								<h4>MAMMA MARIA</h4>
							</div>
							<div class="col-md-3">
								<img src="Lucca.jpg" id="italian2" class="img-circle" alt="italian Restaurant2" width="200" height="200">
								<br>
								<h4>LUCCA RESTAURANT</h4>
							</div>
							<div class="col-md-3">
								<img src="giacomo.jpg" id="italian3" class="img-circle" alt="italian Restaurant3" width="200" height="200">
								<br>
								<h4>GIACOMO'S </h4>
							</div>
							<div class="col-md-3">
								<img src="sorellina.jpg"  id="italian4" class="img-circle" alt="italian Restaurant4" width="200" height="200">
								<br>
								<h4>SORELLINA</h4>
							</div>
						</div>
					</p>
				</div>
				<h3>PUBS AND BARS</h3>
				<div>
					<p>
						TOP PUBS AND BARS
						<div class="row">
							<div class="col-md-3">
								<img src="bell-in-hand-tavern.jpg" id="pub1" class="img-circle" alt="italian Restaurant1" width="200" height="200">
								<br>
								<h4>BELL-IN-HAND-TAVERN</h4>
							</div>
							<div class="col-md-3">
								<img src="Green-briar-1.jpg" id="pub2" class="img-circle" alt="italian Restaurant2" width="200" height="200">
								<br>
								<h4 style="padding-left:30px">GREEN-BRIAR</h4>
							</div>
							<div class="col-md-3">
								<img src="T's pub.jpg" id="pub3" class="img-circle" alt="italian Restaurant3" width="200" height="200">
								<br>
								<h4 style="padding-left:50px">T'S PUB</h4>
							</div>
							<div class="col-md-3">
								<img src="doyles.jpg"  id="pub4" class="img-circle" alt="italian Restaurant4" width="200" height="200">
								<br>
								<h4 style="padding-left:50px">DOYLES CAFE</h4>
							</div>
						</div>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="dialog-form" title="Log In">
		  <p class="validateTips">All form fields are required.</p>
		  <form>
			  <fieldset>
				  <label for="email">EmailId</label><br>
				  <input type="text" name="eml" id="email" class="text ui-widget-content ui-corner-all">
				  <br>
				  <br>
				  <label for="password">Password</label>
				  <br>
				  <input type="password" name="password" id="password" class="text ui-widget-content ui-corner-all">
				  <!-- Allow form submission with keyboard without duplicating the dialog button -->
				  <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
			  </fieldset>
		  </form>
	  </div>
	</body>
	</html>