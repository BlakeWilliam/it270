<?php 
get_header();

/* Template Name: Front Page */

?>


<div id="wrapper">
    <!-- If we have posts... 
    show me the posts! 
    If not... 
    we do not have posts! -->
<?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail() ; ?>
<?php endif; ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post() ; ?>
    <h2><?php the_title() ;?></h2>
    <?php the_content() ; ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php echo wpautop('Sorry, no posts were found!') ;?>
<?php endif; ?>




</div>
<!-- END WRAPPER -->
<?php
get_footer();

?>