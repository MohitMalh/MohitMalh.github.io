<?php
session_start();
?>
<!doctype html>
<html lang="en" ng-app="books">
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
	<script type="text/javascript" src="scroll/jquery.slimscroll.min.js"></script>
 	<script src="checkout.js"></script>
 	<script src="shopping.js"></script>
	<script src="js/angular10.js"></script>
  
    <script src="museum.js"></script>
    <?php
    if (isset($_SESSION['email']))
    	{;
    		?>
    		<script type="text/javascript">
    		$(function()
    		{
    			$("#booking").show();
				$("#login").hide();
			});
			</script><?php
		}
		else
		{;
			?>
			<script type="text/javascript">
			$(function()
			{
				$("#booking").hide();
				$("#login").show();
				$("#cart").hide();
			});
			</script><?php
		};?>
<script>
var books =angular.module('books',[]);

books.controller("cartController",['$scope',function($scope)
{
var book_title = window.sessionStorage["malhotra_cart"];
var title_book = JSON.parse(book_title);
$scope.books = title_book;
$scope.getTotal = function(index)
{
	return $scope.books.reduce(function(p,book)
	{
		return p+(book.qty*book.price)
  	},0)
  	return getTotal
}
$scope.removeBook = function(index)
{
	$scope.books.splice(index, 1);
	titles=$scope.books;
	window.sessionStorage.setItem("malhotra_cart",JSON.stringify(titles));
}

}]);
	  
</script>
    <style>
	.logo{width:120px; height:120px;}
	
	#logoheading{font-family:"Times New Roman","Times","Serif";font-weight:bold;color:blue;font-size:3em;}
	#submit{background-image:url(button.png);width:110px;height:45px;display:visible;}
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
	#justified{text-align: justify;}
	#echo{font-size: 2em;text-align: center;font-weight: bold;};
	.photo{
		width:400px;
		height:300px;
		float:left;
		position:relative;
	}
	.content2
	{
	
		width:400px;
		height:300px;
		border:1px solid black;
		overflow:hidden;
	}
	.tour
	{
		font-style: italic;
		text-align: justify;
	}
	.heading
	{
		font-size: 30px;
		font-weight: bold;

	}
	</style>
	<style type="text/css">
		.wrappedElement {
		  border: 1px solid red;
		  background-color: #eee;
		}
  
		.img-circle.wrappedElement {
		  border-color: brown;
		  border-width: 4px;
		}
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
	 		
	 			$( document ).tooltip();
	 			$("#continue").click(function()
	 			{
	 				$("#cart").hide();
	 				$("#checkoutdiv").show();

	 			});
	 			$("#cancel").click(function()
	 			{
	 				
	 				sessionStorage.clear();
	 				location.href="homepage.php";
	 			})	
	 	});
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
		$(".logout").click(function()
		{
			window.location="logout.php"
	
		});
		
	});
	
	</script>
</head>
<body >
<div class="container-fluid" >
		<div class="row">
			<div class="col-md-4">
				<img class="logo" src="logo_front.png">
			</div>
			<div class="col-md-6">
				<h1 id="logoheading">BOSTON TRAVELS</h1>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-1">
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
	<div class="container" id="login">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="jumbotron">
				<fieldset >
					<form id="loginform" class="pure-form pure-form-aligned">
						<div class="pure-control-group">
							Enter your email
							<input type="text" name="eml" id="emal" placeholder="email address">
						</div>
						<br>
						<br>
						<br>
						<div class="pure-control-group">
							Enter your password
							<input type="password" name="paswd" id="paswd">
							<br>
							<br>
							<br>
						</div>
						<input type="image" src= "login.png" alt="submit" name="submit" id="loginhome" class="pure-control-group">
					</form>
				</fieldset>
			</div>
		</div>
	</div>
	<div class="container" ng-controller="cartController" id="booking">
		<div class="jumbotron" style="text-align:center">
			<table id="cart">
      <caption><b>YOUR CART</b></caption>
      <thead>
        <tr>
            <th>Title</th>
            <th>Qty</th>
            <th>UnitPrice</th>
			<th>UnitPrice</th>
            <th>Line Total</th>
            <th>Total{{getTotal()}}</th>
        </tr>
      </thead>
      <tbody ng-repeat="book in books">
        <tr>
            <td> {{book.name}}</td>
            <td>
                <input ng-model="book.qty" size="5">
            </td>
            <td>
                <input ng-model="book.price" readonly size="3">
            </td>
            <td>{{book.price | currency}}</td>
            <td>{{book.price * book.qty | currency}}</td>
            <td>
                <button ng-click="removeBook($index)">
                    Remove
                </button>
            </td>
        </tr>
        
         <thead>
        <tr><th><br></th></tr>
        <tr>
            <th>
				<button id="continue">
					CONTINUE
				</button>
			</th>
			<th></th>
			<th></th>
            <th></th>
			<th>
				<button id="cancel">
					CANCEL
				</button>
			</th>
			<th></th>
        </tr>
      </thead>
      
      </tbody>
    </table>
    <div class="row" id="checkoutdiv" style="display:none">
							<div class="col-md-12">
    		PLEASE CONFIRM AND ENTER DETAILS
    		

    		<fieldset>

    		 	<form id="checkoutform">
    		 			<div ng-repeat="book in books">
    		 		<label for="tourname">Tour Name</label>
    		 		<input ng-model="book.name" readonly name="tname">
    		 		<label for="quantity"> For People</label>
    		 		<input ng-model="book.qty" size="5" readonly name="num">
    		 		<label for="quantity"> For People</label>
    		 		<label for="price">Price</label>
    		 		<input ng-model="book.price" readonly size="3" name="price">
    		 	</div>
    		 		<label for="total">TOTAL</label>
    		 		{{getTotal()}}
    		 		<br>
    		 		<label for="firstname">First Name</label>
  					<input  type="text" name="fname" id="firstname" placeholder="first name" size="30" required>
    		 		<label for="emal" >Enter your email</label>
  		  			<input  type="text" name="eml" id="emal" placeholder="email address" size="30" required>
  		  			<span id="check"></span>
  		  			<br>
  		  			<label for="Card" >Enter your Card Details</label>
					<input type="text"  placeholder="Card Details" size="30" required pattern="[0-9]{10}">
					<br>
					<input type="image" src="checkoutButton.png"  alt="submit" id="submit" name="submit">
				</form>
			</fieldset>
		</div>
	</div>
		
</body>
</html>
