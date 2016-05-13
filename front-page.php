  <?php get_header(); ?>
    <!-- WP content start -->
<div id="content">

    <div class="flexslider">
        <ul class="slides">
            <li><img src="<?php bloginfo('template_directory');?>/images/img2.png"/></li>
            <li><img src="<?php bloginfo('template_directory');?>/images/img5.png"/></li>
            <li><img src="<?php bloginfo('template_directory');?>/images/img3.png"/></li>
        </ul>
    </div>
    
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
        <p>front-page.php</p>

</div>
<!-- WP content end -->
<?php get_footer(); ?>