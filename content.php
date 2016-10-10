<!-- control home page-->        
         <article class="post1 col-lg-4 col-md-3 col-sm-12 col-xs-12 ">
            <div><!-- for some reasn this keeps the blog title and the date grouped togther on the home page-->
                <p class="post-info-date">
                    <?php the_time('m/d/y'); ?>
                </p>

                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="seperator"></div>
            <p class="post-info"> 

                <?php
        
            $categories = get_the_category();
            $separator =" ";
                $output = '';
            
            if ($categories) { 
                
                foreach ($categories as $category) {
                    $output .= '<a href="' . get_category_link($category->term_id) .'">' . $category->cat_name  . '</a>' . $separator;
                }
            echo  trim($output, $separator);}
            
            ?></p>
           
                <div class="hovereffect">
                    <div class="img-responsive">
                        <?php the_post_thumbnail('small-thumbnail'); ?>
                            <div class="overlay">
                                <h2> <a class="info" href="<?php the_permalink(); ?>">Read More</a></h2>
                               
                            </div>
                    </div>
                </div>
                <?php echo get_the_excerpt(); ?>
            


        </article>