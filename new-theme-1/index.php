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
<?php if(have_posts()) : ?>
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
        <a href="<?php the_permalink(); ?>">Read More about <?php the_title(); ?></a>
    </span>
    <?php endwhile; ?>

<?php else : ?>
    <?php 
        echo '<h2>Search Results:</h2>
        <p>Sorry, we could not find anything matching your keywords</p>
        <p>Try another search using different words</p>'   
    ;?>
    <?php get_search_form(); ?>
<?php endif; ?>
</main>

<?php get_sidebar(); ?>


</div>
<!-- END WRAPPER -->
<?php
get_footer();

?>