<html>
<head>
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name');?></title>
    <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.tosrus.min.all.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/jquery.tosrus.all.css"/>
    <script>
            jQuery(document).ready(function() {
            jQuery('.toggle-nav').click(function(e) {
            jQuery(this).toggleClass('active');
            jQuery('.menu ul').toggleClass('active');
            e.preventDefault();
            });
        });
    </script>
    <script> 
        $(document).ready(function() {
          $("#wrapper").tosrus({
            autoplay   : {
            play       : true
            },
            slides     : {
            scale      : "fill"
            },
            buttons    : true,
            pagination : {
            add        : true
            },
            timeout : 8000
            }).trigger( "next" );
            });
    </script>
    <!-- WP head start -->
    <?php wp_head(); ?>
    <!-- WP head end -->
    </head>
    <body <?php body_class();?>>
        <div id="top-info">
            <a href="<?php echo get_settings('home');?>"><img src="<?php bloginfo('template_directory');?>/images/logo.png" class="logo-main" />
            <h1 class="head-name">Kandice's Dog Care</h1></a>
        </div>
    
        <nav class="menu">
        <div id="inside-nav">
            <a href="index.php"><img src="<?php bloginfo('template_directory');?>/images/logo.png" class="logo-main" />
            <h1 class="head-name">Kandice's Dog Care</h1></a>
        </div>
        
        
        <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'nav', 'container_class' => 'menu',));?>
        
        
    <!--<ul class="active">
        <li><a href="#">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="#">Availability</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
    </ul>-->
    
 
    <a class="toggle-nav" href="#">&#9776;</a>

</nav>