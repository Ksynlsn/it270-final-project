<?php get_header();
/* Template Name: About Page */
?>
<div id="inner-hero">
    <!-- <img src="<?php echo get_template_directory_uri();?>/images/kayak_inner_hero.jpeg" alt="colorful kayaks"> -->
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