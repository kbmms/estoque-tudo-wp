<?php 
       register_nav_menus( array(
            // TOPO
            'principal' => esc_html__( 'Menu Principal', 'EstoqueTudo' ),
               'footer' => esc_html__( 'Menu footer', 'MenuFooter' )
        ) );

		if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support('post-thumbnails');
        }

         require_once( 'setup/walker.php' );



        add_action( 'init', 'customPosts' );

		 function customPosts() {
		      $labels = array(
		        'name' => _x('box', 'post type general name'),
		        'singular_name' => _x('Tamanho do box', 'post type singular name'),
		        'add_new' => _x('Adicionar Novo', 'Box'),
		        'add_new_item' => __('Adicionar Novo Box'),
		        'edit_item' => __('Editar Box'),
		        'new_item' => __('Novo Box'),
		        'all_items' => __('Todos Boxs'),
		        'view_item' => __('Ver  Box'),
		        'search_items' => __('Procurar Box'),
		        'not_found' =>  __('Nenhum Box encontrado'),
		        'not_found_in_trash' => __('Nenhum BOX encontrado'),
		        'parent_item_colon' => '',
		        'menu_name' => 'Tamanho do Box'
		      );
		      $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'publicly_queryable' => true,
		        'show_ui' => true,
		        'show_in_menu' => true,
		        'query_var' => true,
		        'rewrite' => true,
		        'capability_type' => 'post',
		        'hierarchical' => false,
		        'supports' => array( 'editor', 'title', 'page-attributes', 'thumbnail' )
		      );
		      register_post_type('tamanho_do_box',$args);





		      $labels = array(
		        'name' => _x('diferenciais', 'post type general name'),
		        'singular_name' => _x('Diferenciais', 'post type singular name'),
		        'add_new' => _x('Adicionar Novo', 'item'),
		        'add_new_item' => __('Adicionar Novo item'),
		        'edit_item' => __('Editar item'),
		        'new_item' => __('Novo item'),
		        'all_items' => __('Todos Boxs'),
		        'view_item' => __('Ver  item'),
		        'search_items' => __('Procurar item'),
		        'not_found' =>  __('Nenhum item encontrado'),
		        'not_found_in_trash' => __('Nenhum BOX encontrado'),
		        'parent_item_colon' => '',
		        'menu_name' => 'Diferenciais'
		      );
		      $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'publicly_queryable' => true,
		        'show_ui' => true,
		        'show_in_menu' => true,
		        'query_var' => true,
		        'rewrite' => true,
		        'capability_type' => 'post',
		        'hierarchical' => false,
		        'supports' => array( 'editor', 'title', 'page-attributes', 'thumbnail' )
		      );
		      register_post_type('diferenciais',$args);



		      $labels = array(
		        'name' => _x('slides', 'post type general name'),
		        'singular_name' => _x('slide', 'post type singular name'),
		        'add_new' => _x('Adicionar Novo', 'slide'),
		        'add_new_item' => __('Adicionar Novo slide'),
		        'edit_item' => __('Editar slide'),
		        'new_item' => __('Novo slide'),
		        'all_items' => __('Todos Boxs'),
		        'view_item' => __('Ver  slide'),
		        'search_items' => __('Procurar slide'),
		        'not_found' =>  __('Nenhum slide encontrado'),
		        'not_found_in_trash' => __('Nenhum BOX encontrado'),
		        'parent_item_colon' => '',
		        'menu_name' => 'Slides'
		      );
		      $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'publicly_queryable' => true,
		        'show_ui' => true,
		        'show_in_menu' => true,
		        'query_var' => true,
		        'rewrite' => true,
		        'capability_type' => 'post',
		        'hierarchical' => false,
		        'supports' => array( 'editor', 'title', 'page-attributes', 'thumbnail' )
		      );
		      register_post_type('slide',$args);

		      $labels = array(
		        'name' => _x('funcionaitens', 'post type general name'),
		        'singular_name' => _x('funcionaiten', 'post type singular name'),
		        'add_new' => _x('Adicionar Novo', 'item'),
		        'add_new_item' => __('Adicionar Novo item'),
		        'edit_item' => __('Editar item'),
		        'new_item' => __('Novo item'),
		        'all_items' => __('Todos Itens'),
		        'view_item' => __('Ver  item'),
		        'search_items' => __('Procurar item'),
		        'not_found' =>  __('Nenhum item encontrado'),
		        'not_found_in_trash' => __('Nenhum BOX encontrado'),
		        'parent_item_colon' => '',
		        'menu_name' => 'Como Funciona'
		      );
		      $args = array(
		        'labels' => $labels,
		        'public' => true,
		        'publicly_queryable' => true,
		        'show_ui' => true,
		        'show_in_menu' => true,
		        'query_var' => true,
		        'rewrite' => true,
		        'capability_type' => 'post',
		        'hierarchical' => false,
		        'supports' => array( 'editor', 'title', 'page-attributes', 'thumbnail' )
		      );
		      register_post_type('como-funciona-tipo',$args);


		    }

		    // Limite de caracteres
			function excerpt($limit) {
			$excerpt = explode(' ', get_the_excerpt(), $limit);
			if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'...';
			} else {
			$excerpt = implode(" ",$excerpt);
			}
			$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
			return $excerpt;
			}	

			function wp_custom_breadcrumbs() {
			 
			  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
			  $delimiter = '&raquo;'; // delimiter between crumbs
			  $home = 'Home'; // text for the 'Home' link
			  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
			  $before = '<span class="current">'; // tag before the current crumb
			  $after = '</span>'; // tag after the current crumb
			 
			  global $post;
			  $homeLink = get_bloginfo('url');
			 
			  if (is_home() || is_front_page()) {
			 
			    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
			 
			  } else {
			 
			    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
			 
			    if ( is_category() ) {
			      $thisCat = get_category(get_query_var('cat'), false);
			      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
			      echo $before . 'categoria "' . single_cat_title('', false) . '"' . $after;
			 
			    } elseif ( is_search() ) {
			      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
			 
			    } elseif ( is_day() ) {
			      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
			      echo $before . get_the_time('d') . $after;
			 
			    } elseif ( is_month() ) {
			      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			      echo $before . get_the_time('F') . $after;
			 
			    } elseif ( is_year() ) {
			      echo $before . get_the_time('Y') . $after;
			 
			    } elseif ( is_single() && !is_attachment() ) {
			      if ( get_post_type() != 'post' ) {
			        $post_type = get_post_type_object(get_post_type());
			        $slug = $post_type->rewrite;
			        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
			        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
			      } else {
			        $cat = get_the_category(); $cat = $cat[0];
			        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
			        echo $cats;
			        if ($showCurrent == 1) echo $before . get_the_title() . $after;
			      }
			 
			    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			      $post_type = get_post_type_object(get_post_type());
			      echo $before . $post_type->labels->singular_name . $after;
			 
			    } elseif ( is_attachment() ) {
			      $parent = get_post($post->post_parent);
			      $cat = get_the_category($parent->ID); $cat = $cat[0];
			      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
			      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
			 
			    } elseif ( is_page() && !$post->post_parent ) {
			      if ($showCurrent == 1) echo $before . get_the_title() . $after;
			 
			    } elseif ( is_page() && $post->post_parent ) {
			      $parent_id  = $post->post_parent;
			      $breadcrumbs = array();
			      while ($parent_id) {
			        $page = get_page($parent_id);
			        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
			        $parent_id  = $page->post_parent;
			      }
			      $breadcrumbs = array_reverse($breadcrumbs);
			      for ($i = 0; $i < count($breadcrumbs); $i++) {
			        echo $breadcrumbs[$i];
			        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
			      }
			      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
			 
			    } elseif ( is_tag() ) {
			      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
			 
			    } elseif ( is_author() ) {
			       global $author;
			      $userdata = get_userdata($author);
			      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
			 
			    } elseif ( is_404() ) {
			      echo $before . 'Error 404' . $after;
			    }
			 
			    if ( get_query_var('paged') ) {
			      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			      echo __('Page') . ' ' . get_query_var('paged');
			      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
			    }
			 
			    echo '</div>';
			 
			  }
			} // end wp_custom_breadcrumbs()        






// Adicionando Widgets
if ( function_exists ('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer 1',
		'id' => 'footer1',
		'description' => 'This is the left footer widget',
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);
}
if ( function_exists ('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer 2',
		'id' => 'footer2',
		'description' => 'This is the middle footer widget',
		'before_widget' => '<div class="widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);
} 
 ?>