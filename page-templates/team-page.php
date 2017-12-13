<?php 
/*
Template Name: Team Page
*/
 ?>

<?php get_header(); ?>

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		<?php
		$team = get_field( 'team', 'options' );	
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
			<?php if (!empty($team)) { ?>
			<section id="team-section" class="page-section profile-list">
				<header class="section-header">
				<h2><i class="fa fa-users fa-lg text-muted"></i> Who's Who?</h2>
				</header>
				<?php foreach ($team as $tm) { ?>
					<div class="profile">
						<div class="profile-img" style="background-image: url(<?php echo $tm['profile_img']; ?>)"></div>
						<h3 class="name"><?php echo $tm['name']; ?></h3>
						<span class="role"><?php echo $tm['role']; ?></span>
						<div class="biog">
							<?php echo $tm['biog']; ?>
						</div>			
					</div>
				<?php } ?>
			</section>		
			<?php } ?>
		</article>
		
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>