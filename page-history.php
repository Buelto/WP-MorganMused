<!-- this is archives page. it is label history to avoide confusion using the archives name in the back end which in word press is used for special reasons -->
<?php
/* 
Template Name: Archives page
*/
?>
    <?php

get_header();


if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="post liveBlog text-center">

            <p class="post-info post-info-date"> </p>

            <h2 class="greyline-bottom"><?php the_title(); ?></h2>
            <div class="contentMargin">
                <?php the_content(); ?>
            </div>
            <!--* Custom Archives Functions Go Below this line -->
            <p><strong>Categories:</strong></p>
            <ul class="bycategories text-center">
                <?php wp_list_categories('title_li='); ?>
            </ul>
            <div class="clear"></div>

            <p><strong>By Date</strong></p>
<ul class= "test">
<?php compact_archive($style='block'); ?>
</ul>

            <!--* Custom Archives Functions Go Above this line -->
        </article>


        <?php endwhile;

        else:
            echo '<p> No content found</p>';
    endif;
get_footer();
?>