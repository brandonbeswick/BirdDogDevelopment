<?php 

get_header();
?>  
    <div class="front-CTA">
            <h1>Let Us Help You</h1>

            <a href="mailto:brandon@birddogdevelopment.com?subject=Lets Talk Web Development&body=Tell me what I need to know about getting my website up and running!"><p>Get Started Now</p></a>
    </div>    
<?php
if(have_posts()):
    while (have_posts()) : the_post(); 

    ?>
    
<div class="front-p-header">
        
    <div class="post-text">
        <h2>Fast, Freindly, Local</h2>
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
</div>

<div class='front-p-div2'>
    
<div class="card-large">    

    <p> Bird Dog Development’s services to create the best web presence for your company or organization <p>
 

    
    <div class="icon-holder">
        <div class="slide-in align-left">
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/icons/package.png'>
            <p>E-Commerce</p>
            <div class="hidden-tip">
                <div class="tip-holder">
                    <i class="fa fa-close"></i>
                    <h3>Make Sales Online</h3>
                    <ul>
                        <li>~Sell Direct</li>
                        <li>~Take Orders Online</li>
                        <li>~Get Sales Reports</li> 
                        <li class="hidden-tip-button"><a href="mailto:brandon@birddogdevelopment.com?subject=Tell Me About E-Commerce">Email for information</a></li>
                    </ul>
                </div>    
            </div>                  
        </div>
        <div class="slide-in">
    
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/icons/diamond.png'>
            <p>Professional Designs </p>
            <div class="hidden-tip">
                <div class="tip-holder">
                    <i class="fa fa-close"></i>
                    <h3>Look Great Online</h3>
                    <ul>
                        <li>~Modern Design</li>
                        <li>~Easy to Use Sites</li>
                        <li>~Pre-Built or Custom</li>
                        <li class="hidden-tip-button"><a href="mailto:brandon@birddogdevelopment.com?subject=Tell Me About Your Design Options">Email for information</a></li>
                    </ul>
                </div>    
            </div>                 
        </div>
        <div class="slide-in align-right icon-control">
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/icons/lamp.png' >        
            <p>Unique Ideas</p>
            <div class="hidden-tip">
                <div class="tip-holder">
                    <i class="fa fa-close"></i>
                    <h3>Solving Your Problems</h3>
                    <ul>
                        <li>~Innovate Applications</li>
                        <li>~In House Design Team</li>
                        <li>~Budget Friendly Solutions</li>
                        <li>~Research Information</li>
                        <li class="hidden-tip-button"><a href="mailto:brandon@birddogdevelopment.com?subject=Tell Me About Unique Ideas">Email for information</a></li>
                    </ul>
                </div>    
            </div>             
               
        </div>    
    
    </div>   

</div>
</div>

<div class='front-p-div1'>
    
    <p>We believe that creating and cultivating an environment that is friendly to collaboration, is key in development </p>

    <div class="picture-holder">
    
        <div class='card slide-in align-left'>
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/iphone-desk.jpg'>
            <p>Get Mock Ups</p>
        </div>    
        
        <div class='card slide-in'>
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/macbook-working.jpg'>
            <p>Face to Face Meetings</p>
        </div>
        
        <div class='card slide-in align-right'>
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/workin-man.jpg'>
            <p>Website Integration </p>
        </div>
         
    </div>     

</div>

<div class='front-p-div4'>

<div class="card-large" >        
    
    <p> We concentrate on making sure as many people see your site as possible  </p>
 
    
    <div class="icon-holder">
        <div class="slide-in align-left icon-control-2">
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/icons/phone.png' >        
            <p>Mobile Friendly </p>
            <div class="hidden-tip">
                <div class="tip-holder">
                    <i class="fa fa-close"></i>
                    <h3>Control What They See</h3>
                    <ul>
                        <li>~Improved Access to Users</li>
                        <li>~Opportunity for More Visitors</li>
                        <li>~All Sites are Mobile Friendly</li>
                        <li class="hidden-tip-button"><a href="mailto:brandon@birddogdevelopment.com?subject=Tell Me AboutMobile Design">Email for information</a></li>
                    </ul>
                </div>    
            </div>                  

        </div>
        <div class="slide-in icon-control-large">
    
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/icons/projector.png'>
            <p>Gather Analytics</p>
            <div class="hidden-tip">
                <div class="tip-holder">
                    <i class="fa fa-close"></i>
                    <h3>Know Your Analytics  </h3>
                    <ul>
                        <li>~Understanding Analytics</li>              
                        <li>~Readable reports</li>
                        <li>~Analytics trends</li>
                        <li>~Discuss vistor goals</li>
                        <li class="hidden-tip-button"><a href="mailto:brandon@birddogdevelopment.com?subject=Tell Me About Analytics">Email for information</a></li>
                    </ul>
                </div>    
            </div>            
        </div>
        <div class="slide-in align-right">        
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/icons/planchette.png'>
            <p>Set Goals</p>
            
            <div class="hidden-tip">
                <div class="tip-holder">
                    <i class="fa fa-close"></i>
                    <h3>Keep Growing</h3>
                    <ul>
                        <li>~Set Goals and Benchmarks</li>
                        <li>~Discuss Plans and Campaigns </li>
                        <li>~Work to Grow Online</li>
                        <li class="hidden-tip-button"><a href="mailto:brandon@birddogdevelopment.com?subject=Tell Me About Growth Goals">Email for information</a></li>
                    </ul>
                </div>    
            </div>                  
        </div>    
    
    </div>       

</div>
</div>

<div class='front-p-div3'>

    <h2> More about Us!</h2>
    
    <div class="picture-holder-with-text">
    
        <div class='card slide-in align-left no-drop'>
            <img src='https://birddogdevelopment.com/wp-content/themes/birdDogDev/img/writing-book.jpg'>

        </div>    
        
        <div class='about-blurb'>
            <p>
Bird Dog Development was founded to help small business, nonprofits and independent contractors grow and maintain their online presence at a reasonable cost. It takes time, team work, and dedication to create a strong web presence and we want to give you the tools to do so. Bird Dog Development understands to truly develop and maintain a website, it takes a creative and collaborative process. We can provide strategies, goals, and tools to help you on your way to gaining new customers, donors, or fans to your website.  
</p>
        <p class="hidden-tip-button"><a href="contact">Click Here to Reach Out </a></p>        

         
    </div>   

    </div>    

    
</div>

<?php
get_footer();
            
?>