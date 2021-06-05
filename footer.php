 <footer class="footer">
     <div class="footer-container">
         <div class="footer-container__item">
             <span class="footer-container__headline"><?php echo wp_get_nav_menu_name('bottom-categories-menu') ?></span>
             <?php wp_nav_menu([
                    'theme_location'  => 'bottom-categories-menu',
                    'menu'            => 'footer-category',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'footer-container__ul',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ]) ?>
         </div>
         <div class="footer-container__item">
             <span class="footer-container__headline"><?php echo wp_get_nav_menu_name('footer-second-menu') ?></span>
             <?php wp_nav_menu([
                    'theme_location'  => 'footer-second-menu',
                    'menu'            => 'footer-second-menu',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'footer-container__ul',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ]) ?>
         </div>
         <div class="footer-container__item">
             <span class="footer-container__headline"><?php echo wp_get_nav_menu_name('footer-third-menu') ?></span>
             <?php wp_nav_menu([
                    'theme_location'  => 'footer-third-menu',
                    'menu'            => 'footer-third-menu',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'footer-container__ul',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ]) ?>
         </div>
         <div class="footer-container__item">
             <div class="footer__logo logo"> <a href="/"><?php bloginfo('name'); ?></a></div>


             <?php if (is_active_sidebar('social_icons')) : ?>
                 <div class="footer__social-icon">
                     <?php dynamic_sidebar('social_icons'); ?>
                 </div>

             <?php endif; ?>
         </div>
     </div>

 </footer>
 <!-- mobile menu here, becouse z-index don't correct for some elements -->
 
 </div>
 <?php wp_footer(); ?>
 </body>

 </html>