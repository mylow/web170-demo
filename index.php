<html>
<!-- WP head start -->
<head>
    <title>Kandice's Dog Care - Home</title>
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
    </head>
    <!-- WP head end -->
    <body>
        <div id="top-info">
            <a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo.png" class="logo-main" />
            <h1 class="head-name">Kandice's Dog Care</h1></a>
        </div>
    <nav class="menu">
        <div id="inside-nav">
            <a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo.png" class="logo-main" />
            <h1 class="head-name">Kandice's Dog Care</h1></a>
        </div>
    <ul class="active">
        <li><a href="#">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="#">Availability</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
 
    <a class="toggle-nav" href="#">&#9776;</a>

</nav>
        <!-- WP content start -->
<div id="content">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
    
    
    <!--
        <div id="wrapper">
            <img src="<?php// bloginfo('template_directory');?>/images/img2.png" />
            <img src="<?php// bloginfo('template_directory');?>/images/img5.png" />
            <img src="<?php// bloginfo('template_directory');?>/images/img3.png" />
        </div>
        <blockquote class="main-quote">
            <p><strong>"</strong>Kandice is a true dog lover! She provided regular updates and photos, <br>and I knew my dog was receiving the best of care and having a lot of fun too.<strong>"</strong></p>
            <h4>Jenny W.</h4>
        </blockquote>
    <div id="cta">
        <div class="box">
            <div class="cta-text" onclick="location.href='#';" style="cursor: pointer;">
                <h3>About</h3>
                <p>I am a former puppy raiser for Guide Dogs For The Blind with over 9 years of experience...</p>
            </div>
        </div>
        <div class="box">
            <div class="cta-text" onclick="location.href='services.html';" style="cursor: pointer;">
                <h3>Booking</h3>
                <p>Overnight stay $40<br>Walks $23<br>Home Visits $23</p>
            </div>
        </div>
        <div class="box">
            <div class="cta-text" onclick="location.href='#';" style="cursor: pointer;">
                <h3>Contact</h3>
                <p><a href="tel:2065555555">(206)555.5555</a><br><a href="mailto:email@gmil.com">email@gmail.com</a><br><br></p>
            </div>
        </div>
    </div> 
    -->
</div>
        <!-- WP content end -->
    <div id="footer">
        <ul>
            <li><a href="javascript:;">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="javascript:;">Availability</a></li>
            <li><a href="javascript:;">Gallery</a></li>
            <li><a href="javascript:;">Blog</a></li>
            <li><a href="javascript:;">Contact</a></li>
        </ul>
    </div>
    </body>
</html>