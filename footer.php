 <footer class="footer">
     <div class="footer-container">
         <div class="footer-container__item">
             <span class="footer-container__headline"><?php echo wp_get_nav_menu_name('bottom-categories-menu') ?></span>
             <!-- <ul class="footer-container__ul">
                 <li>Simple</li>
                 <li>Theme</li>
                 <li>Background</li>
                 <li>Life</li>
             </ul> -->
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
             <!-- <ul class="footer-container__ul">
                 <li>Menu</li>
                 <li>Just</li>
                 <li>Reacle</li>
             </ul> -->
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
             <div class="footer__social-icon">
                 <img src="/image/header/facebook.png" alt="" />
                 <img src="/image/header/v.png" alt="" />
                 <img src="/image/header/soundcloud.png" alt="" />
                 <img src="/image/header/in.png" alt="" />
             </div>
         </div>
     </div>
 </footer>
 </div>
 <?php wp_footer(); ?>
 </body>

 </html>