<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ping-pong
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1>BOIS</h1>
            <p>Retrouvez tous nos différents type de bois ici</p>
        </header><!-- .page-header -->
        <section class="wood-wrapper">
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
            ?>

            <article class="wood-cards">
				<h2><?php the_title(); ?></h2>
                <div class="wood-cards-content">
					<?php the_post_thumbnail(); ?>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink();?>">
						Découvrir
					</a>
                </div>
            </article>
            <?php

            endwhile; ?>
        </section>

        <?php
        endif;
        ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();