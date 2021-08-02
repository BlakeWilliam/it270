<?php 
get_header();

?>
<div id="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/yellowstone-inner.jpg" alt="banner">
</div>
<div class="wrapper">
<main>

    <!-- If we have posts... 
    show me the posts! 
    If not... 
    we do not have posts! -->
    <h1 class="page-title">
<?php _e( 'Category results for: ', 'site1' ); 

    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        echo esc_html( $categories[0]->name );
}
?>
</h1>


    <?php while(have_posts()) : the_post() ; ?>
<article class="posts">
    <h2><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h2>
<div class="meta">
    <span><b>Posted By:</b> <?php the_author() ; ?></span>
    <span><b>Posted On:</b> <?php the_time('F j, Y g:i a') ; ?></span>
</div>
</article>
<!-- end meta div -->
<div class="thumbnail">
    <?php if(has_post_thumbnail()) : ?>
        <a href="<?php the_permalink() ; ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    <?php endif; ?>
</div>
<!-- end thumbnail -->
    <?php the_excerpt() ; ?>
    <span class="block">
        <a href="<?php the_permalink(); ?>">Read More</a>
    </span>
    <?php endwhile; ?>

</main>

<?php get_sidebar(); ?>


</div>
<!-- END WRAPPER -->
<?php
get_footer();

?>