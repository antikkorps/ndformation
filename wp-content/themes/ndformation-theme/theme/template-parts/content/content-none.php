<?php
/**
 * Template part for displaying a message when posts are not found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ndformation_Theme
 */

?>

<section>

	<header class="page-header">
		<?php if ( is_search() ) : ?>

			<h1 class="page-title">
				<?php
					printf(
						/* translators: 1: search result title. 2: search term. */
						'<h1 class="page-title">%1$s <span>%2$s</span></h1>',
						esc_html__( 'Search results for:', 'ndformation-theme' ),
						get_search_query()
					);
				?>
			</h1>

		<?php else : ?>

			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'ndformation-theme' ); ?></h1>

		<?php endif; ?>
	</header><!-- .page-header -->

	<div class="page-content ndformation-theme-prose">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
			?>

			<p>
			<?php esc_html_e( 'Your site is set to show the most recent posts on your homepage, but you haven&rsquo;t published any posts.', 'ndformation-theme' ); ?></p>

			<p>
				<a href="<?php echo esc_url( admin_url( 'edit.php' ) ); ?>">
					<?php
					/* translators: 1: link to WP admin new post page. */
					esc_html_e( 'Add or publish posts', 'ndformation-theme' );
					?>
				</a>
			</p>

			<?php
		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Your search generated no results. Please try a different search.', 'ndformation-theme' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'No content matched your request.', 'ndformation-theme' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->

</section>
