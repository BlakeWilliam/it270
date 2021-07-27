<?php 
get_header();

?>
<div id="search-error">
    <img src="https://www.blakewagrade.com/it270/wp-content/uploads/searching.jpg" alt="banner">
</div>
<!-- end hero image -->
<div class="wrapper">
<main>
    <h2><?php _e('OOPS! Sorry about that!', 'new-theme-1');  ?></h2>
    <p><?php _e('Looks like we do not currently have any matches to your keywords.', 'new-theme-1'); ?></p>
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