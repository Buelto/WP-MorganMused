</div>
<!--/container-->
<div class="container-fluid site-footer text-center">
    <footer>
        <div class="social">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
           <a href="#"> <i class="fa fa-youtube-square" aria-hidden="true"></i></a>
        </div>
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
        <p class="portfolio">created by <a href="http://irvingbuelto.tech" target="_blank"> IrvingBuelto.tech</a></p>



        <?php wp_footer(); ?>
    </footer>
</div>

</body>

</html>