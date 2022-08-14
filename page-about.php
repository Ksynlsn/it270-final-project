<?php get_header();
/* Template Name: About Page */
?>
<div class="hero"> 
</div>
<div id="wrapper">
<main>

<?php the_post_thumbnail(400, 400) ;?>

<?php the_content() ;?>

</main>


<aside id="secondary" class="widget-area">
   <?php dynamic_sidebar( 'sidebar-about' ); ?>
</aside><!-- #secondary -->

</div><!--wrapper-->
<?php get_footer();?>