<?php 

get_header();
?> 

<?php
if(have_posts()):
    while (have_posts()) : the_post(); 

    ?>
    
<div class="front-p-header">
    
    
  
    <h1>Bird Dog Blog</h1>   
    
    <div class="post-text">
        <p>    
            <?php echo get_the_content(); ?> 
        </p>

    </div>    
            
</div>

 

    <?php

    endwhile;

    else :
        echo '<p>No content found </p>';

    endif;
?> 

<div class='front-p-div2'>
    
<div class="card-large">    

    <h2>Coming Soon! </h2>
 

</div>
</div>
 
 
<?php
get_footer();
            
?>