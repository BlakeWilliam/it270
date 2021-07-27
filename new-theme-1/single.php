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
    <?php the_content() ; ?>
    <?php endwhile; ?>

<?php else : ?>
    <?php echo wpautop('Sorry, no posts were found!') ;?>
<?php endif; ?>

<!-- FOR PREVIOUS OR NEXT POST LINKS AT BOTTOM OF BLOG ENTRY -->
<span class="next previous">
<?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
</span>

<!-- Add Comment replys template -->
<?php comments_template(); ?>
</main>

<aside>
This is my single page
</aside>


</div>
<!-- END WRAPPER -->
<?php
get_footer();

?>