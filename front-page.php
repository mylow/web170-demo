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
    
    

    <div id="cta">
        
        
        <div class="box">
            <div class="cta-text" onclick="location.href='about.php';" style="cursor: pointer;">
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(''); ?>
                <?php endwhile; endif; ?>
                <p>front-page.php</p>
            </div>
        </div>
        
        
        <div class="box">
            <div class="cta-text">
                <h3>Latest Postings</h3>
                <?php rewind_posts(); // will stop the first loop?>
                <?php query_posts('showposts=3');?>
                <?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; endif; ?>
            </div>
        </div>
        
        
        <div class="box">
            <div class="cta-text" onclick="location.href='contact.php';" style="cursor: pointer;">
                <h3>Contact</h3>
                <p><a href="tel:2065555555">(206)555.5555</a><br><a href="mailto:email@gmil.com">email@gmail.com</a><br><br></p>
            </div>
        </div>
    </div>
</div>
<!-- WP content end -->

     
<?php get_footer(); ?>