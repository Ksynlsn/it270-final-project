<?php get_header();?>
<div id="inner-hero">
    <!-- <img src="<?php echo get_template_directory_uri();?>/images/kayak_inner_hero.jpeg" alt="colorful kayaks"> -->
</div>
<div id="wrapper">
<h1>Seattle Area Kayak Tours</h1>
<main>
<?php if(have_posts()) : ?> 
<?php while(have_posts()) : the_post() ;?> 
<article class="post">
<h2 class="post-title"><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h2>

<div class="meta">
<span class="block"><b>Posted By: </b><?php the_author() ;?></span>
<span class="block"><b>Posted On: </b><?php the_time('F j, Y g:i a') ;?></span>
</div><!--close meta-->

<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
    <a href="<?php the_permalink() ;?>">
    <?php the_post_thumbnail() ;?> </a>
<?php endif ;?>
</div><!--end thumbnail-->

<?php the_excerpt() ;?>
<span class="block">
    <a href="<?php the_permalink() ;?>">Learn More About <?php the_title(); ?>!</a>
</span>

</article>
<?php endwhile ;?>

<?php else : ?>
<h2>Search Results:</h2>
<p>Sorry, we could not find any posts using your search terms. 
Try searching again using different keywords</p>
<?php endif ;?>
</main>

   <?php get_sidebar(); ?>

</div><!--end wrapper-->
<?php get_footer();?>