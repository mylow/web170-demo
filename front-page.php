  <?php get_header(); ?>
    <!-- WP content start -->
<div id="content">

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
        <p>front-page.php</p>

</div>
<!-- WP content end -->
<?php get_footer(); ?>