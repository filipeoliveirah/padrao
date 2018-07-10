<div class="col-md-3">
	<!--BODY SIDEBAR-->
	<div class="blog-widget">    
		<div class="col-md-6 blog-widget-title">Pesquisa</div>
		<hr>
		<div class="blog-widget-content">
			<div class="blog-widget-buscar">
			<?php if ( dynamic_sidebar('pesquisar') ) : else : endif; ?>
				<!--<form method="post">    
					<input type="text" name="" placeholder="Digite a palavra desejada"/>
					<button type="submit" class="fas fa-search"></button>        
				</form>-->
			</div>
		</div>
	</div>
	<div class="blog-widget">    
		<div class="col-md-6 blog-widget-title">E-book</div>
		<hr>
		<div class="blog-widget-content">
		<?php if ( dynamic_sidebar('sidebar-1') ) : else : endif; ?>
		</div>
	</div>
	
	<div class="blog-widget">
		<div class="blog-widget-content">
			<?php if ( dynamic_sidebar('banner') ) : else : endif; ?>
		</div>
	</div>
	
	<div class="blog-widget">    
		<div class="col-md-6 blog-widget-title">Posts Recentes</div>
		<hr>
		<div class="blog-widget-content">                
			<div class="blog-widget-noticias">
			<?php
				global $post;
				$args = array( 'posts_per_page' => 7, 'order'=> 'ASC', 'orderby' => 'title' );
				$postslist = get_posts( $args );
				foreach ( $postslist as $post ) :
				setup_postdata( $post ); ?> 
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<span><i class="fas fa-calendar-alt"></i> <?php the_time('d/m/Y'); ?> </span>
				<?php
				endforeach; 
				wp_reset_postdata();
				?>  
				
			</div>               
		</div>
	</div>
	<!--<div class="blog-widget">    
		<div class="col-md-6 blog-widget-title">Newsletter</div>
		<hr>
		<div class="blog-widget-content">                         
			<div class="blog-widget-newsletter">  
				<p>Cadastre-se para receber informações no seu email em primeira mão</p> 
				<form method="post" action="" enctype="multipart/form-data">
					<input type="text" name="newsletter-nome" placeholder="Nome"/>
					<input type="email" name="newsletter-email" placeholder="Email"/>
					<input type="submit" value="Cadastrar"/>
				</form>             
			</div>                
		</div>
	</div>-->
	<!--BODY SIDEBAR-->

	<div class="blog-widget blog-widget-social">    
		<div class="col-md-6 blog-widget-title">Siga-nos</div>
		<hr>
		<div class="blog-widget-content">
			<?php if ( dynamic_sidebar('facebook') ) : else : endif; ?>
		</div>
	</div>
</div>