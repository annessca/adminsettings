<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>

		</div><!-- #content -->
	</div><!-- #page -->

	<script>
		function togglemenu() {
			var x = document.getElementById("mobile-nav");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
	</script>  

	<?php wp_footer(); ?>

</body>
</html>
