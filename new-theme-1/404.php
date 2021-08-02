<?php 
get_header();

?>
<div id="search-error">
<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/searching.jpg" alt="searching">
</div>
<!-- end hero image -->
<div class="wrapper">
<main>
    <h2><?php _e('OOPS! Sorry about that!', 'new-theme-1');  ?></h2>
    <p><?php _e('Looks like something went wrong or you veered off trail!', 'new-theme-1'); ?></p>
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