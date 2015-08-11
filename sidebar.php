<aside class="sidebar" role="complementary">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
	<div class="primary" class="widget-area">
		<ul class="xoxo">
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		</ul>
	</div>
	<?php endif; ?>
</aside>