<!DOCTYPE html>
<html lang="pt-br">
    <head>	
		<?php get_header();?>
    </head>

  <body>
  
	<?php
	/*include_once("incs/menu.php");
    include_once("incs/slider.php");
	include_once("incs/content-blog.php");*/
	?>
	<?php	
	include_once("incs/menu.php");
	//include_once("incs/slider-blog.php");?>

		<div class="blog-content">
			<div class="col-md-12">				
				<div class="blog-widget">   
					
					<div class="col-md-4 blog-widget-title">Materiais <?php if ( have_posts() ) : the_category(', ');?></div>
					<hr>
					<div class="blog-widget-content">	
						<!-- the loop -->
						<?php  while (have_posts()) : the_post(); ?>
							<div class="col-md-4 col-xs-12">
								<div class="blog-card">								
									<div class="blog-card-thumb blog-widget-title-thumb">
										<a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" target="_blank">
											<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
										</a>
									</div>									
									<div class="blog-card-text" style="min-height: 80px">
										<h3><a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" target="_blank"><?php the_title(); ?></a></h3>
									</div>          
								</div>
							</div>
						<?php endwhile; ?>
						<!-- pagination -->
						<div class="col-md-12">
							<?php
								next_posts_link();
								previous_posts_link();
								else :						
								endif;
							?>
						</div>					

					</div>
				</div>
			</div>
			<?php //include_once("sidebar.php");?>			
		</div>

	<?php	
		include_once("footer.php");
	?>
  </body>
</html>	