<?php 
/*
Template Name: Events Page
*/
 ?>
 
<?php get_header(); ?>

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		<?php
		$cat_id = 4;
		$events_cat = get_category($cat_id);
		//echo '<pre>';print_r($events_cat);echo '</pre>';
		$events_args = array(
		'numberposts' => 3,
		'category_name'	=> $events_cat->name,
		'orderby'	=> 'date',
		'order'	=> 'DESC'
		);
		$event_posts = get_posts($events_args);	
		?>
		<article <?php post_class("page-content"); ?>>
			<header class="page-title">
				<div class="container-fluid">
					<h1><?php the_title(); ?></h1>
				</div>
			</header>
			<div class="container-fluid">
				<div class="entry">
				<?php if ( has_post_thumbnail()) { 
				$post_thumbnail_id = get_post_thumbnail_id();
				$feat_img = wp_get_attachment_image_src($post_thumbnail_id, array(350,350) );	
				//echo '<pre class="debug">';print_r($feat_img);echo '</pre>';
				?>
				<figure class="feat-img">
					<img src="<?php echo $feat_img[0]; ?>" class="img-responsive">	
				</figure>
				<?php } ?>
				<?php the_content(); ?>
				</div>
			</div>
			
			<?php if (!empty($event_posts)) { ?>
			<section id="news-section" class="page-section post-grid">
				<header class="section-header">
					<h2><i class="fa fa-mortar-board fa-lg text-muted"></i> <?php echo get_cat_name( $cat_id ); ?></h2>
				</header>
				<?php foreach ( $event_posts as $k => $post ) : setup_postdata( $post ); 
				$bg_img = get_the_post_thumbnail_url( $post , 'medium');
				//echo '<pre>';print_r($bg_img);echo '</pre>';
				$date = get_the_date('M j, Y', $post);
				?>
					<article id="grid-item-<?php echo $k; ?>" class="grid-item">
						<a href="<?php the_permalink(); ?>"><div class="img" style="background-image: url(<?php echo $bg_img; ?>)"></div></a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</article>
				<?php 
				endforeach; 
				wp_reset_postdata();
				?>
				<div class="view-btn-wrap">
					<a href="<?php echo get_category_link($cat_id);?>" class="btn btn-default btn-block text-uppercase">View all Events <i class="fa fa-angle-double-right"></i></a>
				</div>	
			</section>			
			<?php } ?>
			
		</article>
		
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>