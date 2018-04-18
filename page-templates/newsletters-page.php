<?php 
/*
Template Name: Newsletter Downloads Page
*/
 ?>

<?php get_header(); ?>

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		<?php
		$newsletters = get_field( 'hwt_newsletters', 'options' );
		?>
		<article <?php post_class("page-content"); ?>>
			<header class="page-title">
				<div class="container-fluid">
					<h1><?php the_title(); ?></h1>
				</div>
			</header>
			<div class="container-fluid">
				<div class="entry">
				<?php the_content(); ?>
				</div>
			</div>
			<?php if (!empty($newsletters)) { ?>
			<section id="newsletters-section" class="page-section downloads-list">
				<div class="container-fluid">
					<header class="section-header">
						<h2><i class="fa fa-download fa-lg text-muted"></i> Downloads</h2>
					</header>
				<?php foreach ($newsletters as $nl) { ?>
	
					<a href="<?php echo $nl['newsletter'] ?>" target="_blank" class="download-link">
						<span class="title">Newsletter</span>
						<span class="date"><?php echo $nl['month'] ?> - <?php echo $nl['year'] ?></span>
					</a>

				<?php } ?>
				</div>
			</section>		
			<?php } ?>

		</article>
		
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>