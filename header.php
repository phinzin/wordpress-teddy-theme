<!DOCTYPE html>
<html lang="en">

<head>
   <?php $baseURL = esc_url(get_template_directory_uri()); ?>
   <base href="<?php echo $baseURL . '/'; ?>" target="_blank">
   <title>Toys Shop an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
   <!--meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
   <script>
      addEventListener("load", function() {
         setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
         window.scrollTo(0, 1);
      }
   </script>
   <!--//meta tags ends here-->
   <!--booststrap-->
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
   <!--//booststrap end-->
   <!-- font-awesome icons -->
   <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
   <!-- //font-awesome icons -->
   <!-- For Clients slider -->
   <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
   <!--flexs slider-->
   <link href="css/JiSlider.css" rel="stylesheet">
   <!--Shoping cart-->
   <link rel="stylesheet" href="css/shop.css" type="text/css" />
   <!--//Shoping cart-->
   <!--stylesheets-->
   <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
   <!--//stylesheets-->
   <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
   <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

</head>

<body>
   <div class="header-outs" id="home">
      <div class="header-bar">
         <div class="info-top-grid">
            <div class="info-contact-agile">
               <ul>
                  <li>
                     <?php
                     $phone = get_theme_mod('Phone');
                     if (!empty($phone)) {
                        echo '<span class="fas fa-phone-volume"></span>
                              <p><a href="tel:' . $phone . '">' . $phone . '</a></p>';
                     }
                     ?>
                  </li>
                  <li>
                     <!-- <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">info@example1.com</a></p> -->
                     <?php
                     $email = get_theme_mod('Email');
                     if (!empty($email)) {
                        echo '<span class="fas fa-envelope"></span>
                              <p><a href="mailto:' . $email . '">' . $email . '</a></p>';
                     }
                     ?>
                  </li>
                  <ul style="display: inline;float: right;">
                     <?php
                     $fb = get_theme_mod('Facebook');
                     $tw = get_theme_mod('Twitter');
                     $ln = get_theme_mod('Linkedin');
                     $gp = get_theme_mod('Google-plus');
                     if (!empty($fb)) {
                        echo '<li><a href="' . $fb . '"><i class="fab fa-facebook"></i></a></li>';
                     }
                     if (!empty($tw)) {
                        echo '<li><a href="' . $tw . '"><i class="fab fa-twitter"></i></a></li>';
                     }
                     if (!empty($ln)) {
                        echo '<li><a href="' . $ln . '"><i class="fab fa-linkedin"></i></a></li>';
                     }
                     if (!empty($gp)) {
                        echo '<li><a href="' . $gp . '"><i class="fab fa-google-plus"></i></a></li>';
                     }
                     ?>
                  </ul>

               </ul>
            </div>
         </div>
         <div class="container-fluid">
            <div class="hedder-up row">
               <div class="col-lg-3 col-md-3 logo-head">
                  <!-- <h1><a class="navbar-brand" href="index.html">Toys-Shop</a></h1> -->
                  <?php
                  $logo = get_theme_mod('logo');
                  if (!empty($logo)) {
                     echo '<h1><a href="' . get_home_url() . '" ><img src="' . $logo . '" style="width: 100px;height: 50px;" /></a></h1>';
                  }

                  ?>
               </div>
               <div class="col-lg-5 col-md-6 search-right">
                  <form class="form-inline my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="Search">
                     <button class="btn" type="submit">Search</button>
                  </form>
               </div>
               <div class="col-lg-4 col-md-3 right-side-cart">
                  <div class="cart-icons">
                     <ul>
                        <li>
                           <span class="far fa-heart"></span>
                        </li>
                        <li>
                           <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                        </li>
                        <li class="toyscart toyscart2 cart cart box_1">
                           <form action="#" method="post" class="last">
                              <input type="hidden" name="cmd" value="_cart">
                              <input type="hidden" name="display" value="1">
                              <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                              </button>
                           </form>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               <ul class="navbar-nav ">

                  <?php
                  $menuLocations = get_nav_menu_locations();
                  $menuID = $menuLocations['main-nav'];
                  $primaryNav = wp_get_nav_menu_items($menuID);
                  $id_parent = 0;

                  //   echo "'.$navItem->title.'";
                  foreach ($primaryNav as $navItem) {
                     if ($navItem->menu_item_parent == $id_parent) {
                        $sub = "";
                        // echo $navItem->title.'aaaa'.$navItem->menu_item_parent;
                        $haveChild ='<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        '.$navItem->title.'
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">';

                        foreach ($primaryNav as $navItem2) {
                           if($navItem2->menu_item_parent==$navItem->ID){
                              
                              $sub.='<a class="nav-link '.$navItem2->ID.'" href="'.$navItem2->url.'" title = "'.$navItem2->title.'">'.$navItem2->title.'</a>';

                        //    <a class="nav-link" href="product.html">Kids Toys</a>
                        //    <a class="nav-link " href="product.html">Dolls</a>
                        //    <a class="nav-link " href="product.html">Key Toys</a>
                        //    <a class="nav-link " href="product.html">Boys Toys</a>
                           }
                        }
                        if(empty($sub)){
                           // print level 1
                           echo '<li class="nav-item">
                           <a href="'.$navItem->url.'" class="nav-link">'.$navItem->title.'</a>
                        </li>';
                        }else{
                           // print sub menu
                           echo $haveChild .''.$sub .'</div></li>';
                        }
                     }
                  }

                  ?>

                  <!-- <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="service.html" class="nav-link">Service</a>
                     </li>
                     <li class="nav-item">
                        <a href="shop.html" class="nav-link">Shop Now</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="icon.html">404 Page</a>
                           <a class="nav-link " href="typography.html">Typography</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="product.html">Kids Toys</a>
                           <a class="nav-link " href="product.html">Dolls</a>
                           <a class="nav-link " href="product.html">Key Toys</a>
                           <a class="nav-link " href="product.html">Boys Toys</a>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                     </li> -->
               </ul>
            </div>
         </nav>
      </div>
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!-- // banner -->