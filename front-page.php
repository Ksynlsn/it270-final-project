<?php get_header();
/* Template Name: Front Page */
?> 
<div id="inner-hero">

</div>

<div id="hero-small"> <!-- Home page hero image (mobile) displays here-->
    <img src="<?php echo get_template_directory_uri();?>/images/kayak_upright.jpeg" alt="colorful kayaks">
</div>

<div class="hero" id="hero-large"><!-- Home page hero image displays here-->
<?php 
echo do_shortcode('[smartslider3 slider="2"]');
?>
</div>

<div id="wrapper">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ;?>
    <?php the_content() ;?>
<?php endwhile ;?>
<?php else : ?>
<h2><?php echo wpautop('Sorry, no posts were found!');?></h2>
<?php endif ;?>

</div><!--end wrapper-->
<?php get_footer();?>