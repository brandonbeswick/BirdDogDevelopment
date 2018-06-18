<?php 

get_header();
?> 

<?php
if(have_posts()):
    while (have_posts()) : the_post(); 

    ?>
    
<div class="front-p-header">
    
    
  
    <h1>About Us</h1>   
    
    <div class="post-text">
        <p>    
            <?php echo get_the_content(); ?> 
        </p>

    </div>    
            
</div>




    </article>

    <?php

    endwhile;

    else :
        echo '<p>No content found </p>';

    endif;
?>
</div>

<div class="serv-holder">
    <div class="serv-text-left" id="story">
        <h2>Our Story</h2>
        <p>Bird Dog Development is a small Web Development company located in Historic Richmond Virginia. We are a part of a new movement of boutique web developers that are trying to provide a more comprehensive service to small businesses and non-profits to help them save on costs and still grow their web presence. We believe in treating customers questions with urgency and respecting the fact that every question is important when it comes to your business or non-profit. </p>
    </div>
    <img src="https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/about-story.jpg" class="serv-img-right slide-in align-right ">

    <div class="serv-text-right" id="mission">
        <h2>Our Mission</h2>
        <p>
Born out of the need for affordable web development for small business, non-profits and private contractor. Bird Dog Development is taking a different approach to web development. Understand to build a website is a truly collaborative process, we want help clients understand what is happening behind the scenes and feel comfortable asking questions about the process. By building a team mentality we plan to grow a better web presence for small business and non-profits.      
        </p>
    </div>    
    
    <img src="https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/about-mission.jpg" class="serv-img-left slide-in align-left ">
    
    <div class="serv-text-left"  id="culture">
        <h2>Our Culture</h2>
        <p>
Bird Dog Development understands that the internet was designed as a platform for people to provide meanfuling and accessible information. In order to complete this task we believe that communication is everything. When clients feel in control of their web presence and the strategies to grow it, we feel they make better and more informed decisions. More than anything we want to do all of this at the lowest possible cost in order to get the most for your business or non-profit.       
        </p>
    </div>
    <img src="https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/about-culture.jpg" class="serv-img-right slide-in align-right">
    
    <div class="serv-text-right"  id="non-profits">
        <h2>Non-Profits</h2>
        <p>
We understand the importance of non-profits and all of the work they do, and for that reason, we specialize in offering comprehensive tools and designs for these types of organizations. Without the work of many non-profits we would see a number of humanitarian issues and we recognize this and intend to assist in their work! Please feel free to reach out or click here for information about non-profits we currently work with!         
        </p>
    </div>
    
    <img src="https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/about-non-prof.jpg" class="serv-img-left slide-in align-left">
    

        <p class="hidden-tip-button" style="grid-column: 1 / -1 ;"><a href="contact">Click Here to Reach Out </a></p>        

    
    


</div>

<?php
get_footer();
            
?>