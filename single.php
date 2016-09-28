<!-- this page is for all pages-->
<?php get_header_image(); ?>

<?php


get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <article class=" liveBlog ">
    <div class="text-center">
    <p class="post-info post-info-date">     </p>
        <h2><?php the_title(); ?></h2>
    
        <p class="post-info greyline-bottom"> <?php the_time('m/d/y'); ?> | by: <?php the_author(); ?>  | Posted in 
        
       <?php
        
            $categories = get_the_category();
            $separator =", ";
                $output = '';
            
            if ($categories) { 
                
                foreach ($categories as $category) {
                    $output .= '<a href="' . get_category_link($category->term_id) .'">' . $category->cat_name  . '</a>' . $separator;
                }
            echo  trim($output, $separator);}
            
            ?></p>
            </div>
        <div class= "blog-content">
        <?php the_content(); ?>
        <div class="blogBanner">
        <?php the_post_thumbnail('banner-image'); ?>
        </div>
        </div>
    </article>

    <?php endwhile;

        else:
            echo '<p> No content found</p>';
    endif;
get_footer();
?>


