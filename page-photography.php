<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); 
?>
    <article class="post liveBlog text-center">
    
         <h2><?php the_title(); ?></h2>
         <h4 class="greyline-bottom"><i>I'm also available for hire!</i></h4>
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