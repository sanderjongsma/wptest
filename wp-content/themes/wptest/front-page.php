<?php get_header(); ?>

	<div class="content-wrap">
		<div class="container">
		
			<!-- #content -->
			<div class="content">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

			</div>
			<!-- /content -->
		</div>
		<!-- /container
	</div>
	
<?php get_footer(); ?>