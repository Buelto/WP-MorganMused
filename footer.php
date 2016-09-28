</div>
<!--/container-->
<div class= "container-fluid site-footer text-center">
    <footer>

        <nav class="site-nav">
            <?php
    $args =array(
        'theme_location' => 'footer'
    
    );
        ?>
                <?php wp_nav_menu( $args ); ?>
        </nav>

        <p>
            <?php bloginfo('name'); ?> - &copy;
                <?php echo date('Y');?>
        </p>
        <p class="portfolio">created by <a href="www.Irvingbuelto.tech" target="_blank"> IrvingBuelto.tech</a></p>


    
    <?php wp_footer(); ?>
    </footer>
</div>

</body>

</html>