<?php
    
    
    function limitarTexto($texto, $limite){
        $contador = strlen($texto);
        if ( $contador >= $limite ) {      
            $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
            return $texto;
        }
        else{
            return $texto;
        }
    }

    // FUNÇÃO QUE MOSTRA IMAGEM EM DESTAQUE NA LISTAGEM DO BLOG
    /*
    function your_columns_head($defaults) { 
        $new = array();
        $tags = $defaults['my_post_thumbs']; // Salva a coluna Imagem
        unset($defaults['my_post_thumbs']); // Remove a coluna Imagem da lista
         
        foreach($defaults as $key=>$value) {
        if($key=='title') { // Quando encontrar a coluna titulo
        $new['my_post_thumbs'] = $tags; // Coloque a coluna Imagem antes dele
        }
        $new[$key]=$value;
        }         
        return $new;
    }
    add_filter('manage_posts_columns', 'your_columns_head');   */

    //Adiciona imagem destacada a pagina de blogpost e pagetype
    add_theme_support( 'post-thumbnails' );
    
    // Adicona área de widgets
    function dna_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Sidebar', 'dna' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<p class="blog-widget-subtitle">',
            'after_title'   => '</p>',
        ) );
    }
    add_action( 'widgets_init', 'dna_widgets_init' );

    function pesquisar_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'pesquisar', 'dna' ),
            'id'            => 'pesquisar',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<p class="blog-widget-subtitle">',
            'after_title'   => '</p>',
        ) );
    }
    add_action( 'widgets_init', 'pesquisar_widgets_init' );

    function facebook_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Facebook', 'dna' ),
            'id'            => 'facebook',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<p class="blog-widget-subtitle">',
            'after_title'   => '</p>',
        ) );
    }
    add_action( 'widgets_init', 'facebook_widgets_init' );

    function banner_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Banner', 'dna' ),
            'id'            => 'banner',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<p class="blog-widget-subtitle">',
            'after_title'   => '</p>',
        ) );
    }
    add_action( 'widgets_init', 'banner_widgets_init' );
    // Adicona área de widgets

    function wordpress_pagination() {
		global $wp_query;

		$big = 999999999;

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
    }
    
    function my_post_queries( $query ) {
        // do not alter the query on wp-admin pages and only alter it if it's the main query
        if (!is_admin() && $query->is_main_query()){
      
          // alter the query for the home and category pages 
      
          if(is_home()){
            $query->set('posts_per_page', 3);
          }
      
          if(is_category()){
            $query->set('posts_per_page', 2);
          }

          if(is_search()){
            $query->set('posts_per_page', 4);
          }
      
        }
    }
    add_action( 'pre_get_posts', 'my_post_queries' );

    // Register Custom Navigation Walker
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
    if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
        // file does not exist... return an error.
        return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        // file exists... require it.
        require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
    }
    // Register Custom Navigation Walker

    // Registra uma área para adição do menu
    register_nav_menus( array(
        'primary' => __( 'Principal', 'dna' ),
    ) );

    add_action('init', 'type_post_materiais');  
    function type_post_materiais() { 
          $materiais = array(
              'name' => _x('Materiais', 'post type general name'),
              'singular_name' => _x('Material', 'post type singular name'),
              'add_new' => _x('Adicionar Material', 'Novo Material'),
              'add_new_item' => __('Novo Material'),
              'edit_item' => __('Editar Material'),
              'new_item' => __('Novo Material'),
              'view_item' => __('Ver Material'),
              'search_items' => __('Procurar Materiais'),
              'not_found' =>  __('Nenhum registro encontrado'),
              'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
              'parent_item_colon' => '',
              'menu_name' => 'Materiais'
          );
  
          $args = array(
            'labels' => $materiais,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,           
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'register_meta_box_cb' => 'materiais_meta_box',       
            'supports' => array('title','thumbnail', 'custom-fields', 'revisions')
          );
    
      register_post_type( 'materiais' , $args );
      flush_rewrite_rules();
    } 
?>