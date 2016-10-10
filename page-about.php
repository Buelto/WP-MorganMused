<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); 
?>
    <article class="text-center">
     
        <p class="post-info post-info-date">     </p>
    
        <h2 ><?php the_title(); ?></h2>
        <h4 class="greyline-bottom"><i>This is where friends are made!</i></h4>
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

