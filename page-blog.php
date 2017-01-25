         <?php /** Template Name: Blog */ ?>
         <?php get_header(); ?>
         <div class="bg-internas container-fluid">
         </div>

         <div class="container-fluid interna-fluid-texto">
          <div class="container text-center">
            <?php wp_custom_breadcrumbs(); ?>
            <h1><span class="text-light"></span> <span class="text-bold">BLOG</span></h1>          
          </div>
        </div>



        <div class="container-fluid">
          <div class="container">
            <div class="col-md-8">
              <div class="row margin-blog">
                <?php


                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query(array (
                  'post__not_in' => array(276,280), 
                  'post_type' => 'post',
                  'paged' => $paged.'&cat='.$cat_id
                  ));
                $i = 0;
                while ($wp_query->have_posts()) : $wp_query->the_post();

                ?>
                <?php  $i++; ?>
                <div class="col-md-6 blog-box animated bounceIn">
                  <div class="col-md-12 foto-blog">
                   <?php the_post_thumbnail('medium', array('class' => 'img-responsive')) ?>
                 </div>
                 <div class="col-md-12">
                  <p>Publicado em: <strong><?php echo $date_new; ?></strong></p>
                  <p>Categoria: <?php the_category(', '); ?></p>
                  <h1><span class="text-light"></span> <span class="text-bold"><?php the_title(); ?></span></h1> 
                  <p><?php echo excerpt('15'); ?></p>
                  <a class="more" href="<?php the_permalink(); ?> ">Continue Lendo >></a>
                </div>
              </div>  
              <?php if ($i == 2) {
                echo '</div><div class="row margin-blog">';
                $i = 0;
              } ?>
            <?php endwhile; ?>
          </div>
          <div class="text-center">
            <div class="text-center pagination">
              <?php
              global $wp_query;
              
            $big = 999999999; // need an unlikely integer
            echo '<div class="paginate-links">';
            echo paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?paged=%#%',
              'prev_text' => __('<<'),
              'next_text' => __('>>'),
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages
              ) );
            echo '</div>';
            ?>
          </div>    
        </div>
        
        
        <?php wp_reset_query(); ?>
      </div>     
      
      <div class="col-md-4 categoria-looping">
        <ul>
          <?php wp_list_categories( array(
            'orderby'    => 'name',
            'exclude' => '1', 
            'show_count' => true
              // 'exclude'    => array( 10 )
            ) ); ?> 
          </ul>
        </div>
      </div>
    </div>
    

    <?php get_template_part( 'templates/link-com-banners', 'link-com-banners' ); ?>
    <?php get_footer(); ?>