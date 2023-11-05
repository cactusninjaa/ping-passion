<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cactus
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
            ?>
            <div class="article">
                <div class="header">
                    <h1><?php the_title()?></h1>
                </div>
                <div class="article-content">
                    <?php the_post_thumbnail();?>
					<div class="p-wrapper">
						<p><?php the_content();?></p>
					</div>
                </div>
            </div>
        <?php
		endwhile; // End of the loop.
			?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
