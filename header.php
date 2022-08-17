<!DOCTYPE html>
<html <?php language_attributes() ;?> >
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="https://kit.fontawesome.com/236cdfe8ce.js" crossorigin="anonymous"></script>
<title><?php bloginfo('name');?></title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Nanum+Gothic+Coding:wght@700&family=Shrikhand&display=swap" rel="stylesheet">
<!-- this function will allow plugin info (stylesheets, javascript, etc) to
display before the closing head -->
<?php wp_head();?>
</head>
<body <?php body_class(! is_front_page() ? "inner-page" : "" ); ?>>

<header>
<div id="inner-header">
<a href="<?php echo get_home_url() ;?>"><span class="logo">PNW Kayak</span></a>
<nav id="site-navigation" class="main-navigation">
<button class="nav-button">Toggle Navigation</button>
<?php
$args_primary = array(
'theme_location' => 'primary',
'items_wrap' => '<ul class="primary-nav">%3$s</ul>'
);
?>
<?php wp_nav_menu($args_primary); ?>
</nav>
<a href="<?php echo get_home_url() ;?>"><span id="logo-mobile">PNW Kayak</span></a>
</div><!--close inner-header-->
</header>
