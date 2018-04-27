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
			<div class="col-md-9">				
				<div class="blog-widget">   
					
					<div class="col-md-6 blog-widget-title">Posts da Categoria</div>
					<hr>
					<div class="blog-widget-content">	
						
						<!-- the loop -->
						<?php while (have_posts()) : the_post(); ?>
							<div class="col-md-6 col-xs-12">
								<div class="blog-card">								
									<div class="blog-card-thumb blog-widget-title-thumb"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></div>
									<div class="blog-tag-categoria"><span><?php the_category( ', ' ); ?></span></div>
									<div class="blog-card-text" style="min-height: 380px">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<p><?php the_excerpt(); ?></p>
									</div> 
									<div class="blog-card-footer">
										<div class="col-md-6"><div class="blog-card-data"><?php the_time('d/m/Y'); ?></div></div>
										<div class="col-md-6"><div class="blog-card-leia-mais" style="padding-right: 25px"><a href="<?php the_permalink(); ?>">LEIA MAIS</a><i class="fas fa-angle-right"></i></div></div>
									</div>          
								</div>
							</div>
						<?php endwhile; ?>
						<!-- pagination -->
						<div class="col-md-12">
							<div class="col-md-6">
								<?php								
									previous_posts_link();							
								?>
							</div>
							<div class="col-md-6">
								<div class="pull-right">
								<?php
									next_posts_link();
								?>
								</div>
							</div>
						</div>					

					</div>
				</div>
			</div>
			<?php include_once("sidebar.php");?>			
		</div>

	<?php	
		include_once("footer.php");
	?>
  </body>
</html>