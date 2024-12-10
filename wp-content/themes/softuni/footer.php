<?php
$softuni_options = get_option('softuni_custom_options');
?>
<footer id="footer" class="footer light-background">
	<div class="container">
		<div class="row g-4">
			<?php get_sidebar('footer-1') ?>
			<?php get_sidebar('footer-2') ?>
		</div>

		<div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
			<p>© <span>Copyright</span> <strong class="px-1 sitename">Active.</strong> <span>All Rights Reserved</span></p>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you've purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
			</div>
		</div>
	</div>
</footer>

<?php if (! empty($softuni_options['softuni_homepage_scroller_to_top']) && true == $softuni_options['softuni_homepage_scroller_to_top']) : ?>
	<!-- Scroll Top -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php endif; ?>

<!-- Preloader -->
<div id="preloader"></div>

<?php wp_footer(); ?>
</body>

</html>