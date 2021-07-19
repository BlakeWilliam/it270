<?php 
get_header();

/* Template Name: 404 Page */

?>

<div id="wrapper">
<main>
    <h2><?php _e('OOPS! Sorry about that!', 'site');  ?></h2>
    <p><?php _e('Looks like we do not currently have any matches to your keywords', 'site1'); ?></p>
    <p><?php get_search_form(); ?>
</main>
<aside>
    this is the 404 page
</aside>

</div>
<!-- END WRAPPER -->
<?php
get_footer();

?>