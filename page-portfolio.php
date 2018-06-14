<?php 

get_header();
?> 

<?php
if(have_posts()):
    while (have_posts()) : the_post(); 

    ?>
 
    </article>

    <?php

    endwhile;

    else :
        echo '<p>No content found </p>';

    endif;
?>
</div>
<h1 class="port-head">Portfolio</h1>
<div class="port-holder">

    <div class="port-ex">
        <a href="http://brandoncolebeswick.com/"><img src="https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/port-1.png"></a>
        <div class="port-ex-text" style="grid-column: span 1;">
            <h3>Brandon Cole Beswick</h3>
            <p>Richmond comic and blog page. With a direct link events calendar synced to a Google calendar for easy updating and social media aggregator. </p>
        
        </div>
    
    </div>
    
    <div class="port-ex">
        <a href="http://winstonhodges.com/"><img src="https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/winstoncom.png" ></a>
        <div class="port-ex-text">
            <h3>Winston Hodges</h3>
            <p>A Virginia stand up, with a direct link events calendar synced to a Google calendar for easy updating.</p>
        
        </div>        
        
    </div>
    
    <div class="port-ex">
        <a href="http://comedyrva.com/"><img src="https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/richmondcom.png"></a>  
        <div class="port-ex-text">
            <h3>Richmond Comedy</h3>
            <p>A page with stand up comedy events around Richmond Virginia. Linked to a Facebook Profile and Google calendar. </p>
        
        </div>        
    </div>    

    
</div>
     
<?php
get_footer();
            
?>