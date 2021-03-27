<?php
get_header();
?>

		<nav id="site-navigation" class="main-navigation">
			<h1><?php esc_html_e( 'All SMS Messages and Quotes', 'susty' );?></h1>
			<ul>
				<?php
				wp_list_categories( array(
					'title_li'   => '',
				) );
				?>
			</ul>
		</nav><!-- #site-navigation -->

<?php
get_footer();
