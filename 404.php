<?php get_header(); ?>

<section>
	<article class="post not-found">
		<header class="header">
			<h1 class="entry-title"><?php _e( 'Not Found', 'starthere' ); ?></h1>
		</header>
		<section class="entry-content">
			<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'starthere' ); ?></p>
			<?php get_search_form(); ?>
		</section>
	</article>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>