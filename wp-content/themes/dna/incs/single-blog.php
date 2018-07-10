<div class="blog-content">
    <div class="col-md-9">
        <!--BODY NEW-->
        <div class="blog-card">            
            <div class="blog-card-text">
                <!--<div class="blog-tag-categoria"><span><?php the_category( ', ' ); ?></span></div>   -->     
                <!-- Start the Loop. -->
                <?php if ( have_posts() ) :
                    
                    while ( have_posts() ) : the_post(); ?>

                        <?php if ( in_category( '3' ) ) : ?>
                            <div class="post-cat-three">
                        <?php else : ?>
                            <div class="post">
                        <?php endif; ?>

                        <div class="">
                            <?php the_content(); ?>
                        </div>

                        <p class="postmetadata"><?php _e( 'Postado por: ' ); ?> <?php the_author_posts_link(); ?></p>
                        </div> <!-- closes the first div box -->

                    <?php endwhile;
                    
                    else : ?>

                    <p><?php esc_html_e( 'Nenhum post relacionado' ); ?></p>
                
                <?php endif; ?>
                
            </div> 
            <div class="blog-card-footer">
                <div class="col-md-3"><div class="blog-card-data"><?php the_time('d/m/Y'); ?></div></div>
                <div class="col-md-6"><div class="blog-card-social"><i class="fab fa-facebook-f"> <a href="https://www.facebook.com/padraolaboratorio/" target="_blank"> /padrao </a></i><i class="fab fa-instagram"> <a href="https://www.instagram.com/laboratorio.padrao" target="_blank"> @padrao </a> </i></div></div>
                
            </div>          
        </div>
        <!--BODY NEW-->

        <div class="blog-widget">    
            <div class="col-md-6 blog-widget-title">Posts Relacionados</div>
            <hr>
            <div class="blog-widget-content">
                <?php
                   $related = get_posts( 
                    array( 
                        'category__in' => wp_get_post_categories( $post->ID ), 
                        'numberposts'  => 5, 
                        'post__not_in' => array( $post->ID ) 
                    ) 
                );
                
                if( $related ) { 
                    foreach( $related as $post ) {
                        setup_postdata($post);?>
                        <div class="col-md-6 col-xs-12">
                            <div class="blog-card">
                                
                                <div class="blog-card-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a></div>
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
                        </div><?php
                    }
                   wp_reset_postdata();
                }
                ?>
            </div>
        </div>

    </div>
    <?php include_once("sidebar.php");?>
</div>