<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cactus
 */

$dataRevetements = get_fields(); 
var_dump($dataRevetements);
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

		<section>
			<h2>Caractériques revêtements</h2>
			<div class='flex-wrapper'>
				<div class="content-wrapper">
					<p>La rapidité</p>
					<span><?= $dataRevetements['rapidite']?></span>
				</div>
				<div class="content-wrapper">
					<p>Le contrôle</p>
					<span><?= $dataRevetements['controle']?></span>
				</div>
				<div class="content-wrapper">
					<p>L'adhérence</p>
					<span><?= $dataRevetements['adherence']?></span>
				</div>
				<div class="content-wrapper">
					<p>L'épaisseur</p>
					<span><?php foreach ($dataRevetements['epaisseur'] as $value) {
						echo $value;
					}?></span>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
