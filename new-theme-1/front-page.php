<?php 
get_header();

/* Template Name: Front Page */

?>


<div id="wrapper">
    <!-- If we have posts... 
    show me the posts! 
    If not... 
    we do not have posts! -->
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post() ; ?>
    <h2><?php the_title() ;?></h2>
    <?php the_content() ; ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php echo wpautop('Sorry, no posts were found!') ;?>
<?php endif; ?>

<p>Welcome To The Beginning</p>


</div>
<!-- END WRAPPER -->
<?php
get_footer();

?>