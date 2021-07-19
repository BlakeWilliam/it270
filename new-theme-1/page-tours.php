<?php 
get_header();

/* Template Name: Tours Page */

?>


<div id="wrapper">
<main>
<?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail() ; ?>
<?php endif; ?>

    <?php while(have_posts()) : the_post() ; ?>
    <h2><?php the_title() ;?></h2>
    <?php the_content() ; ?>
    <?php endwhile; ?>

</main>
<aside>


</aside>
</div>
<!-- END WRAPPER -->
<?php
get_footer();

?>