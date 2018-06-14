

<footer class="site-footer">
    
        <nav class="site-nav-footer">
        
            <?php 
            
            $args = array(
                'theme_location' => 'footer'
            );
            ?>
            
            <?php wp_nav_menu(  $args ); ?>
        
        </nav>
    
    <div class="s-media-footer">
    <p>Social Media</p>
    <div class="s-media-icons">
        <a href="https://www.facebook.com/Bird-Dog-Development-1246870345445094/"><i class="fa fa-facebook-square"></i>   
        </a>
        <a href="https://twitter.com/BirdDevelopment"><i class="fa fa-twitter-square"></i>   </a>
        <a href="https://www.instagram.com/birddogdev/?hl=en"><i class="fa fa-instagram"></i>   </a>
        <a href="https://twitter.com/BirdDevelopment"><i class="fa fa-youtube-square"></i></a>
    </div>    
    </div>

    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
 
</footer>

<?php wp_footer(); ?>

</body>
</html>