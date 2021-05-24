<?php 
    include('functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "Precisa logar primeiro";
        header('location: login.php');
    }
?>
<?php

// 1. Create a database connection
$connection = mysqli_connect("localhost","root","usbw");

if (!$connection) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Erro Interno');
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, "overclothing");
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Erro Interno');
}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Metas Page details-->
<title>Overclothing</title>
<meta name="description" content="OnePage Resume Portfolio">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
<!--font-family: 'Metrophobic', serif;-->
<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,400italic,600italic' rel='stylesheet' type='text/css'> 
<!--font-family: 'Open Sans', sans-serif;-->
<!-- font icon css style-->
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="store.js" async></script>
</head>
<body onLoad="load()" onUnload="GUnload()">
<!-- Preloader -->
<div id="preloader">
	<div id="status"></div>
</div>
<!--wrapper start-->
<div class="wrapper noGap" id="wrapper">

<!--Header start -->
<header>
  	<!--menu start-->
    <div class="menu">
    <a href="#" class="nav-icon" id="nav-show"><i class="fa fa-bars"></i></a>
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
              	<!--<div class="logo">logo</div> -->
                <div class="navArea"><a href="#" class="closeMenu"><i class="fa fa-times"></i></a>
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                     <!-- <a class="navbar-brand" href="#">Menu</a>  --></div>
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                        <li class="menuItem active"><a href="#wrapper">Home</a></li>
                        <li class="menuItem"><a href="#Male">Homem</a></li>
                        <li class="menuItem"><a href="#Female">Mulher</a></li>
                        <li class="menuItem"><a href="#kid">Criança</a></li>                     
                        <li class="menuItem"><a href="#sobrenos">Sobre Nós</a></li>
                        <li class="menuItem"><a href="login.php">Logout</a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <!--menu end--> 
    <!--banner start-->
    <div class="banner row" id="banner">
    <div class="bannerText">
        <h1>OverClothing</h1>
        <h3>Spearheading the best portugal street clothes</h3>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd slides-container" style="height:100%"> 
        <!--background slide show start-->
        <div class="slide"> 
          <img src="images/header-image/image01.jpg" alt="image01"> </div>
        <div class="slide"> 
          <img src="images/header-image/image02.jpg" alt="image01"> </div>
        <!--background slide show end--> 
      </div>
    </div>
    <!--banner end--> 
    
  </header>
  <!--Header end -->
<!--male start-->
  <section class="protfolio" id="Male">
    <div class="container">
        <div class="heading">
            <h2>Secção Masculina</h2>
            <h3>Os melhores produtos masculinos</h3>            
        </div>
    </div>
    <div class="row">
      <section class="container content-section">
            <div class="shop-items">
              <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <?php


                $res=mysqli_query($connection,"select * from product");
                while ($row=mysqli_fetch_array($res))


                {  

                ?>

                <div class="shop-item">
                    <span class="shop-item-title">  <?php echo $row["product_name"];  ?>   </span>
                    <img class="shop-item-image" src="./admin/<?php echo $row["product_image"];  ?>" alt="" width="480" height="480"/>
                    <div class="shop-item-details">
                        <span class="shop-item-price">   <?php echo $row["product_price"];  ?>€   </span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                <?php  


            }
                ?>


                <h2 class="section-header">Camisolas</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 1</span>
                    <img class="shop-item-image" src="images/projects/thumbMale-images/thumb1.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">13.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 2</span>
                    <img class="shop-item-image" src="images/projects/thumbMale-images/thumb7.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">15.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>               
                <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Calças</h2>



                <div class="shop-item">
                    <span class="shop-item-title">Peça 3</span>
                    <img class="shop-item-image" src="images/projects/thumbMale-images/thumb2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">11.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">                  
                    <span class="shop-item-title">Peça 4</span>
                    <img class="shop-item-image" src="images/projects/thumbMale-images/thumb10.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">27.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>
                <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Hoodies</h2>



                <div class="shop-item">
                    <span class="shop-item-title">Peça 5</span>
                    <img class="shop-item-image" src="images/projects/thumbMale-images/thumb11.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">15.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 6</span>
                    <img class="shop-item-image" src="images/projects/thumbMale-images/thumb12.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">14.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>
                <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Acessórios</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 7</span>
                    <img class="shop-item-image" src="images/projects/thumbMale-images/thumb6.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">10.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 8</span>
                    <img class="shop-item-image" src="images/projects/thumbMale-images/thumb4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">9.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>
                </div>
            </div>
        </section>
    </div>
  </section>
    </div>
  </section> 
  
  <!--female start-->
	<section class="protfolio" id="Female">
    <div class="container">
        <div class="heading">
            <h2>Secção Feminina</h2>
            <h3>Os melhores produtos femininos</h3>            
        </div>
    </div>
    <div class="row">
      <section class="container content-section">
            <div class="shop-items">
              <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Camisolas</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 9</span>
                    <img class="shop-item-image" src="images/projects/thumbFemale-images/thumb11.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">622.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 10</span>
                    <img class="shop-item-image" src="images/projects/thumbFemale-images/thumb12.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">254.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>               
                <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Calças</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 11</span>
                    <img class="shop-item-image" src="images/projects/thumbFemale-images/thumb3.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">127.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 12</span>
                    <img class="shop-item-image" src="images/projects/thumbFemale-images/thumb10.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">162.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>
                <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Hoodies</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 13</span>
                    <img class="shop-item-image" src="images/projects/thumbFemale-images/thumb4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">112.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 14</span>
                    <img class="shop-item-image" src="images/projects/thumbFemale-images/thumb2.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">122.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>
                <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Acessórios</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 15</span>
                    <img class="shop-item-image" src="images/projects/thumbFemale-images/thumb6.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">128.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 16</span>
                    <img class="shop-item-image" src="images/projects/thumbFemale-images/thumb7.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">123.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>
                </div>
            </div>
        </section>
    </div>
  </section>
    </div>
  </section>

  <!--kid start-->
	<section class="protfolio" id="kid">
    <div class="container">
        <div class="heading">
            <h2>Secção Criança</h2>
            <h3>Os melhores produtos para criança</h3>            
        </div>
    </div>
    <div class="row">
      <section class="container content-section">
            <div class="shop-items">
              <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Camisolas</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 17</span>
                    <img class="shop-item-image" src="images/projects/thumbKid-images/thumb6.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">2.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 18</span>
                    <img class="shop-item-image" src="images/projects/thumbKid-images/thumb8.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">3.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>               
                <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Calças</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 19</span>
                    <img class="shop-item-image" src="images/projects/thumbKid-images/thumb1.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">4.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 20</span>
                    <img class="shop-item-image" src="images/projects/thumbKid-images/thumb5.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">5.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>
                <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Hoodies</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 21</span>
                    <img class="shop-item-image" src="images/projects/thumbKid-images/thumb2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">6.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 22</span>
                    <img class="shop-item-image" src="images/projects/thumbKid-images/thumb7.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">7.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>
                <li class="hoodies shirst col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <h2 class="section-header">Acessórios</h2>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 23</span>
                    <img class="shop-item-image" src="images/projects/thumbKid-images/thumb4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">2.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Peça 24</span>
                    <img class="shop-item-image" src="images/projects/thumbKid-images/thumb10.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">1.99€</span>
                        <button class="btn btn-primary shop-item-button" type="button">Adicionar ao carrinho</button>
                    </div>
                </div>
                </li>
                </div>
            </div>
        </section>
    </div>
  </section>
    </div>
  </section>

  <section class="container content-section">
            <h2 class="section-header">Carrinho</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">Items</span>
                <span class="cart-price cart-header cart-column">Preço</span>
                <span class="cart-quantity cart-header cart-column">Quantidade</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">0€</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">Comprar</button>
        </section>

   <!--about us start-->
  <section class="aboutus" id="sobrenos">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
      	<div class="heading">
        <h2>Sobre nós</h2>
        <h3>Pequena introdução da nossa empresa</h3>        
      </div>
      </div> 
       </div> 
      <div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right media"><img src="images/logo.png" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left media">
        	<h5>Overclothing</h5>
            <h4>Melhores Produtos de street clothing são vendidos aqui</h4>
            <p>Aqui podes encontrar as melhores roupas portugueses de street wear</p>

        </div>
      	 
      </div>     
    </div>    
  </section>
  <!--about us end--> 

 
  <!--footer start-->
  <section class="footer" id="footer">
    <div class="container">
      <ul>
        <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
      </ul>
    </div>
    <p class="text-center"><a href="#wrapper" class="gototop"><i class="fa fa-chevron-up fa-2"></i></a></p>
  </section>
  <!--footer end-->     
  </div>
<!--wrapper end--> 

<!--modernizr js--> 
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
<!--jquary min js--> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!--for placeholder jquery--> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

<!--for header jquery--> 
<script type="text/javascript" src="js/stickUp.js"></script> 
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'skillset',
		  3: 'experience',
		  4: 'education',
		  5: 'ourwork',
		  6: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
	

});
</script>
<script>
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>  

<!--for portfolio jquery--> 
<script src="js/jquery.isotope.js" type="text/javascript"></script> 
<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script> 
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script> 

<!--contact form js--> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
					scrollwheel: false,
                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
				
				

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Hello!'
                });
            }
        </script>

<script src="js/jquery.easing.js"></script> 
<script src="js/jquery.mousewheel.js"></script> 
<script defer src="js/slideroption.js"></script> 

<!--for theme custom jquery--> 
<script src="js/custom.js"></script>

</body>
</html>