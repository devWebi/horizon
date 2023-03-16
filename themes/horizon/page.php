<?php
/**
 * Template padrão das páginas
 */

get_header();

get_template_part( 'template-parts/page', 'headline' );
?>

<main class="general">
	<div class="container">
		<?php the_content(); ?>
	</div>
</main>

<?php
get_footer();