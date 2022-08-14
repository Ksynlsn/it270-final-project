<?php get_header();?>

<div class="hero"> </div>

<div id="wrapper">
<main>
<?php if(have_posts()) : ?> 

<?php while(have_posts()) : the_post() ;?> 
<article class="post">
<h2 class="post-title"> <?php the_title() ;?> </h2>
<div class="meta">
<span><b>Posted By: </b><?php the_author() ;?></span>
<span><b>Posted On: </b><?php the_time('F j, Y g:i a') ;?></span>
</div><!--close meta-->

<?php the_post_thumbnail(400, 400) ;?>

<?php the_content() ;?>

</article>
<span class="next-previous">
<?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
</span>
<?php endwhile ;?>

<?php else : ?>
<h2><?php echo wpautop('Sorry, no posts were found!');?></h2>
<?php endif ;?>

<?php comments_template(); ?>
</main>

</div><!--wrapper-->
<?php get_footer();?>