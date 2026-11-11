   <footer class="site-footer">
    <div class="footer-branding">
        <p><?php bloginfo( 'name' )?></p>
        <p><?php bloginfo('description')?></p>
    </div>
        <?php
        wp_nav_menu([
            'theme_location' => 'footermenue',
            'container' => 'nav',
            'container_class' => 'footer-navigation',
            'container_aria_label' => 'Footernavigation',
            'fallback_cb' => false,
        ]);
        ?>
   </footer>
   <?php
     wp_footer(); 
     ?>

</body>
</html>
