<?php get_header();
/* Template Name: Tours Page */
?>
<div class="hero"> </div>
<div id="wrapper">

<main>

<?php the_post_thumbnail(400, 400) ;?>

<?php the_content() ;?>

</main>

<aside id="secondary" class="widget-area">
   <?php dynamic_sidebar( 'sidebar-tours' ); ?>
</aside><!-- #secondary -->


</div><!--wrapper-->
<?php get_footer();?>
