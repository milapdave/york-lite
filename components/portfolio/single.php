<?php
/**
 * The file for displaying the portfolio meta.
 *
 * @package @@pkg.name
 * @author  @@pkg.author
 * @license @@pkg.license
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="hero entry-header">

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">

				<?php the_time( get_option( 'date_format' ) ); ?>

				<?php york_portfolio_categories(); ?>

				<?php the_meta(); ?>

			</div>

		</header>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>

</article>