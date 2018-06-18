<?php 

get_header();

if(have_posts()):
    while (have_posts()) : the_post();
    get_template_part('content', get_post_format());


    endwhile;
?>
<div class="single-blog">
<article class="post-aside">
    
        <div class="post-head">
            <h2><?php  the_title(); ?></h2>
        <div class="mobile-thumb">
   <?php the_post_thumbnail(); ?>
        </div>
        
            <p class="post-info"> <?php the_time('F jS, Y'); ?> </p>
            <p>Posted in 
        
        <?php 
        
            $categories = get_the_category();
            $separator = ", ";
            $output = '';
            
            if($categories){
                
                foreach ($categories as $category){
                    $output .= '<a href="' . get_category_link($category->term_id) .'">' . $category->cat_name . '</a>' . $separator;
                }
                
                echo trim($output, $separator);
            }
            
        ?>
            <p><a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
            </p>
        </div>    
<?php the_content(); ?>
</article>

<a href="http://192.168.0.146:8888/wordpress/blog/" class="more-blogs"><p>More Blogs</p></a>

</div>
<?php

    else :
        echo '<p>No content found </p>';

    endif;

get_footer();
            
?>