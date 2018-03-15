<?php get_header('aviso'); ?>

	<main role="main g-position--relative">
		<!-- section -->
		<section class="g-container--md g-padding-y-150--xs g-margin-t-60--xs">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
