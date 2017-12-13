<?php get_header(); ?>

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		<?php
		$sb_imgs = get_field( 'sb_imgs' );	
		$tweets_pg = get_page_by_path('tweets');
		//echo '<pre class="debug">';print_r($tweets_pg);echo '</pre>';
		?>
		<article <?php post_class("page-content"); ?>>

			<?php if ($post == $tweets_pg) { ?>
			<?php the_content(); ?>
			<?php } else { ?>
			<header class="page-title">
				<div class="container-fluid">
					<h1><?php the_title(); ?></h1>
				</div>
			</header>
			<div class="container-fluid">
				<div class="entry">
				<?php if ( has_post_thumbnail() || !empty($sb_imgs)) { 
				$post_thumbnail_id = get_post_thumbnail_id();
				$feat_img = wp_get_attachment_image_src($post_thumbnail_id, array(350,350) );
				//echo '<pre class="debug">';print_r($sb_imgs);echo '</pre>';
				?>
				<figure class="feat-img">
					<img src="<?php echo $feat_img[0]; ?>" class="img-responsive">	
				</figure>
				<?php } ?>
				
				<?php the_content(); ?>
				</div>
			</div>
			<?php if (!empty($sb_imgs)) { ?>
			<div class="extra-imgs">
			<?php foreach ($sb_imgs as $img) { 
			$caption = $img['caption'];
			?>
			<figure class="feat-img">
				<img src="<?php echo $img['img']; ?>" class="img-responsive">
				<?php if (!empty($caption)) { ?>
				<figcaption class="caption"><?php echo $caption; ?></figcaption>			
				<?php } ?>	
			</figure>
			<?php } ?>	
			</div>		
			<?php } ?>
			<?php } ?>
							
		</article>
		
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>