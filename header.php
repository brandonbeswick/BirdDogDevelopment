<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<meta property="og:description" content="Richmond Virginia Based Web Company">
<meta property="og:image" content="https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/DEVELOPMENT-white.png">    
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
<title>Bird Dog Development</title>
 
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Libre+Franklin" rel="stylesheet">
    
  <script src="https://js.stripe.com/v3/"></script>
<script src="js/index.js" data-rel-js></script>    
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119787148-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119787148-1');
</script>
    
    
<?php wp_head(); ?>    
</head>
    
<body <?php body_class(); ?> >


    <!-- site header -->
    
    <header class="site-header">
        <div class="logo">
            <a href="<?php echo home_url(); ?>" >             <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/DEVELOPMENT-white.png'></a>
        </div>


        <div class="menu-drop">
            
            <i class="fa fa-bars"></i>
        
        </div>            
        
        <nav class="site-nav">
            
        <div class='log-in-bar-desk'>    
            
        <?php

        if ( is_active_sidebar( 'header-widget' ) ) : ?>
            <div id="header-widget-area" class="hw-widget widget-area" role="complementary">
            <?php dynamic_sidebar( 'header-widget' ); ?>
            </div>

        <?php endif; ?>    
            
        </div>             
            
            
            <?php 

            $args = array(
                'theme_location' => is_user_logged_in()? 'logged-in' : 'primary'
 
            );
            ?>
            <?php wp_nav_menu(  $args ); ?>   
        

            <div class='log-in-bar'>    
            
        <?php

        if ( is_active_sidebar( 'header-widget' ) ) : ?>
            <div id="header-widget-area" class="hw-widget widget-area" role="complementary">
            <?php dynamic_sidebar( 'header-widget' ); ?>
            </div>

        <?php endif; ?>    
            
        </div> 

        </nav>

    </header>
