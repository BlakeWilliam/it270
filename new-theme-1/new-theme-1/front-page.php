<?php 
get_header();

/* Template Name: Front Page */

?>
<div id="hero">
    <img src="https://www.blakewagrade.com/it270/wp-content/uploads/yellowstone-header-home.jpg" alt="banner">
</div>
<!-- end hero image -->
<div class="wrapper">

    <!-- If we have posts... 
    show me the posts! 
    If not... 
    we do not have posts! -->
<?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail() ; ?>
<?php endif; ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post() ; ?>
    <?php the_content() ; ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php echo wpautop('Sorry, no posts were found!') ;?>
<?php endif; ?>



</div>
<!-- END WRAPPER -->
<div class="full-width">
<?php dynamic_sidebar( 'sidebar-buy' ); ?>
</div>
<!-- end full width div -->
<?php get_footer(); ?>