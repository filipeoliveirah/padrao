<div class="blog-content">
    <div class="col-md-9">
        <!--BODY NEW-->
        <?php
            global $post;
            $args = array( 'posts_per_page' => 4, 'order'=> 'ASC', 'orderby' => 'title' );
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post );
        ?> 
        <div class="blog-card">
            <div class="blog-card-thumb blog-widget-title-full">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                </a>
            </div>
            <div class="blog-tag-categoria"><span><?php the_category( ', ' ); ?></span></div>
            <div class="blog-card-text">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
            </div> 
            <div class="blog-card-footer">
                <div class="col-md-3"><div class="blog-card-data"><?php the_time('d/m/Y'); ?></div></div>
                <div class="col-md-6"><div class="blog-card-social"><i class="fab fa-facebook-f"> <a href="https://www.facebook.com/padraolaboratorio/" target="_blank">/padrao</a> </i><i class="fab fa-instagram"> <a href="https://www.instagram.com/laboratorio.padrao/" target="_blank">@padrao</a></i></div></div>
                <div class="col-md-3"><div class="blog-card-leia-mais" style="padding-right: 25px"><a href="<?php the_permalink(); ?>">LEIA MAIS</a><i class="fas fa-angle-right"></i></div></div>
            </div>          
        </div>
        <?php
            endforeach; 
            wp_reset_postdata();
        ?> 

        <!--
        <div class="blog-paginacao">
            <a href="javascript:;" class="recentes">
                <i class="fas fa-angle-double-left"></i> POSTS RECENTES
            </a>
            /
            <a href="javascript:;" class="antigos">ANTIGOS
                <i class="fas fa-angle-double-right"></i>
            </a>
        </div>-->
    </div>
</div>