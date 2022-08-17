<footer>
<div class="inner-footer top">
	<div class="footer-widget"><?php dynamic_sidebar('sidebar-specials') ;?></div>
	<div class="footer-widget"><?php dynamic_sidebar('sidebar-testimonials') ;?></div>
</div>
    
    <ul class="social">
        <li><a href =""><i class="fas fa-envelope-square"></i></a></li>
        <li><a href =""><i class="fab fa-instagram-square"></i></a></li>
        <li><a href =""><i class="fab fa-facebook-square"></i></a></li>
    </ul>

<div class="inner-footer bottom">
	<ul>
		<li>Copyright &copy; <?php echo date('Y');?></li>
		<li>All Rights Reserved</li>
		<li><a href="">Web Design by Kacie</a></li>
		<li><a id="html-checker" href="#">HTML&nbsp;Validation</a></li>
		<li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS&nbsp;Validation</a></li>
	</ul>
</div>

</footer>
<script>
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
	
	$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
</script>
<?php wp_footer(); ?>
</body>
</html>