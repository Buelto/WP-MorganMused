<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); 
?>
    <article class="text-center">
    
        <h2 ><?php the_title(); ?></h2>
                       <div class="aboutsocial greyline-bottom">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
           <a href="#"> <i class="fa fa-youtube-square" aria-hidden="true"></i></a>
        </div>

        
        <div class="contentMargin">
        <?php the_content(); ?>
        </div>
        
    </article>

    <?php

   endwhile;

        else:
            echo '<p> No content found</p>';
    endif;
get_footer();

?>

