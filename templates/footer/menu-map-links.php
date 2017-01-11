                 <div class="footer-1 col-md-3">
                   <p> <span class="text-bold">Mapa</span>  <span class="text-light">do Site</span></p>
                        <?php
            wp_nav_menu(
                $args = array(
                    'menu' => 'footer',
                    'container' => 'ul',
                    'container_class' => ' ',
                    'container_id' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'theme_location' => 'footer'
                )
            );
        ?>  
                 </div>

