<!DOCTYPE html>
<html <?php language_attributes() ;?> >
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php bloginfo('name');?></title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
<!-- this function will allow plugin info (stylesheets, javascript, etc) to
display before the closing head -->
<?php wp_head();?>
</head>
<body <?php body_class();?>>
<header></header>
<div id="top">

</div><!--close top-->

<div id="inner-header"></div><!--close inner-header-->

<?php if(have_posts()) : ?> <!-- if we have posts/pages- show them! -->

<?php while(have_posts()) : the_post() ;?>     <!-- show posts by using while loop -->

<?php the_content() ;?>

<?php endwhile ;?>

<?php else : ?>
<h2><?php echo wpautop('Sorry, no posts were found!');?></h2>
<?php endif ;?>

</body>
</html>