<?php 
ob_start();
session_start();
require_once 'login/config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<title>CareODrive</title>
	<meta charset="utf-8">
	<link rel="icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon" />
    <meta name="description" content="Codester is a free responsive Bootstrap template by Dzyngiri">
    <meta name="keywords" content="free, template, bootstrap, responsive">
    <meta name="author" content="Inbetwin Networks">  
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/bootstrap-social.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
  <link rel="stylesheet" href="assets/css/tm_docs.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>    
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>

	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
				
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
  
  <!--Google analytics code-->	  
	  <script type="text/javascript">
           var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-29231762-1']);
          _gaq.push(['_setDomainName', 'dzyngiri.com']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
      </script>
</head>

	<body>
    <div class="spinner"></div> 
<!-- header start -->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="img/logo.png"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li class="active"><a href="index.php">Home</a></li>
                <?php 
                if(isset($_SESSION['logged_in'])){if($_SESSION['logged_in']){?>
                   
                <li class="sub-menu"><a href="booking.php">Booking</a></li>
                <?php }} ?>
                <li class="sub-menu"><a>Services</a>
                
                      <ul>
                    <li><a href="#">Parking</a></li>
                    <li><a href="#">Chauffeur</a></li>
                  </ul>
                    </li>

                <li class="sub-menu"><a href="contact.php">Contact</a></li>
                

                <?php if(isset($_SESSION['logged_in'])) { if($_SESSION['logged_in']){?>
              <?php 
                echo "<li class=\"sub-menu\"><a>";
                echo  explode(" ",$_SESSION['name'])[0];
                echo "</a><ul><li><a href=\"account.php\">My Account</a></li><li><a href=\"login/logout.php\">Logout</a></li></ul></li>";
              ?>

              <?php }} ?>

              <?php 
                if(!isset($_SESSION['logged_in'])){
              ?>

              <?php
                echo "<li class=\"sub-menu\"><a href =\"login\" >Login</a> </li>";
              ?>
              <?php } ?>


              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 
        <!-- slider -->
        <div class="flexslider">
              <ul class="slides">
            <li> <img src="img/slide-1.jpg" alt="" > </li>
            <li> <img src="img/slide-2.jpg" alt="" > </li>
            <li> <img src="img/slide-3.jpg" alt="" > </li>
            <li> <img src="img/slide-4.jpg" alt="" > </li>
            <li> <img src="img/slide-5.jpg" alt="" > </li>
          </ul>
            </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              
            </div>
      </div>
        </div>
  </div>
      
      <!-- content -->
      
      <div id="content" class="content-extra"><div class="ic"></div>
    



    <div class="row-1">
        <div class="container">
        <div class="row">
        <article class="span6">
        <h4>Our Team</h4>
         </article>
         <div class="span">
          <div class="span3">
          <div class="tm_view tm_view_first">
                <img src="img/team/2016-03-12-23-19-15-683-1-298x300.jpg" width = "274" alt="" />
                <div class="tm_mask">
                  <h2> Dinesh Agarwal </h2>
                    <p> Co-Founder </p>
              </div>
          </div>
          </div>
          <div class="span3">
            <div class="tm_view tm_view_first">
                <img src="img/team/namit-1-300x300.jpg" width = "274" alt="" />
                <div class="tm_mask">
                  <h2> Namit Mahuvakar </h2>
                    <p> Co-Founder </p>
              </div>
          </div>
          </div>
          <div class="span3">
          <div class="tm_view tm_view_first">
                <img src="img/team/image2-2.jpg" width = "274" alt="" />
                <div class="tm_mask">
                  <h2> Abhishek Jhunjhunwala </h2>
                    <p> Co-Founder </p>
              </div>
          </div>
          </div>

          
          </div>

                    <!--   <ul class="portfolio clearfix">           
           <li class="box"><a href="img/team/2016-03-12-23-19-15-683-1-298x300.jpg" class="magnifier" ><img alt="" height="268" width ="274" src="img/team/2016-03-12-23-19-15-683-1-298x300.jpg"></a></li> 
           <li class="box"><a href="img/team/namit-1-300x300.jpg" class="magnifier" ><img alt="" height="268" width ="274" src="img/team/namit-1-300x300.jpg"></a></li> 
           <li class="box"><a href="img/team/image2-2.jpg" class="magnifier" ><img alt="" height="268" width ="274" src="img/team/image2-2.jpg"></a></li>                    
         </ul> 
      --></div>
            </div>

      </div>
        </div>
    <div class="container">
          <div class="row">
        <article class="span6">
              <h3>Shortly about us</h3>
              <div class="wrapper">
            <figure class="img-indent"><img src="" alt="" /></figure>
            <div class="inner-1 overflow extra">
                  <div class="txt-1">Our main motive is to solve the huge crisis that the current society has related to parking by organizing it in a much better fashion than it already is, to process, calculate and provide analytical solutions and spots for your vehicle. We strive day and night to serve you better and are trying to change the way the world looks at parking by making it as simple as possible, within a touch.</div>
                </div>
          </div>
            </article>
        <article class="span6"><!--
              <h3>Some quick links</h3>
                <div class="wrapper">
                    <ul class="list list-pad">
                          <li><a href="#">Campaigns</a></li>
                          <li><a href="#">Portraits</a></li>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Fine Art</a></li>
                        </ul>
                    <ul class="list list-pad">
                          <li><a href="#">Campaigns</a></li>
                          <li><a href="#">Portraits</a></li>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Fine Art</a></li>
                        </ul>
                    <ul class="list list-pad">
                          <li><a href="#">Campaigns</a></li>
                          <li><a href="#">Portraits</a></li>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Fine Art</a></li>
                        </ul>
                    <ul class="list">
                          <li><a href="#">Advertising</a></li>
                          <li><a href="#">Lifestyle</a></li>
                          <li><a href="#">Love story</a></li>
                          <li><a href="#">Landscapes</a></li>
                    </ul> -->
                </div>
            </article>
      </div>
        </div>
  </div>
    </div>

<!-- footer --><footer>
      <div class="container clearfix">
    <div class="privacy pull-left">&copy; 2016 | CarODrive</a></div>
  </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>