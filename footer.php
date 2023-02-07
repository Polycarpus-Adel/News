<?php
/**
 * Footer Template.
 */

$classes = [
	'main-footer',
	'cols-gap-lg',
	Bunyad::options()->footer_layout ? 'footer-' . Bunyad::options()->footer_layout : '',
	Bunyad::options()->footer_scheme === 'dark' ? 's-dark' : '',
];
?>

	<?php do_action('bunyad_footer_before'); ?>

	<?php if (apply_filters('bunyad_do_partial_footer', true)): ?>
		<footer <?php Bunyad::markup()->attribs('main-footer', [
			'class' => $classes
		]); ?>>

			<?php
				get_template_part('partials/footer/' . Bunyad::options()->footer_layout);
			?>
		</footer>
	<?php endif; ?>
	
	<?php do_action('bunyad_footer_after'); ?>

</div><!-- .main-wrap -->

<?php get_template_part('partials/search-modal'); ?>

<?php wp_footer(); ?>

</body>
</html>