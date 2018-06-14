<?php 

get_header();
?> 

<?php
if(have_posts()):
    while (have_posts()) : the_post(); 

    ?>
   
<div class="front-p-header"> 
    
    <div class="post-text">
        <p>    
            <?php the_content(); ?> 
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

<div class="contact">   
     <form>
        <label>Name (Required)</label><br>
        <input type="text" size="30" id="formName" required><br>
        <label>Email (Required)</label><br>
        <input type="text" size="30" id="formEmail" required><br>
        <label>Phone Number</label><br>
        <input type="text" size="30" id="formNumber"><br>
        <label>Subject</label><br>
        <input type="text" size="30" id="formSubject"><br>
        <label>Message</label><br>
        <textarea cols="30" rows="10" id="formMess" required> </textarea><br> 
        <button  id="formSubBut">Email Here</button>
 
    </form>
</div>
<script>

const formAct = document.getElementById('formSubBut');

const formSpot = document.querySelector('.contact');
    
function formGrab(){ 
    var senderName = document.getElementById('formName');
    var senderEmail = document.getElementById('formEmail');
    var senderNumber = document.getElementById('formNumber').value;
    var senderSubject = document.getElementById('formSubject').value;
    var senderMess = document.getElementById('formMess');


    console.log(senderName);    
    
    var aTag = `<div class="thank-you">
                    <h2>Thank You!</h2>
 
                    <a id="formSubA" href="mailto:brandon@birddogdevelopment.com?subject=${senderSubject}&body=${senderMess.value} the email was sent by ${senderName.value} who has an email at ${senderEmail.value} and a phone number of ${senderNumber}"></a>
                </div>
        `;

 

    if(senderName.value == ""){ 
        
    }
    else if(senderEmail.value == ""){
        
    }
    else if(senderMess.value == ""){
        
    }
    else{
        formSpot.innerHTML = aTag; 
    
        console.log(aTag);
        var simulateClick = function (elem) {
            // Create our event (with options)
            var evt = new MouseEvent('click', {
                bubbles: true,
                cancelable: true,
                view: window
            });
            // If cancelled, don't dispatch our event
            var canceled = !elem.dispatchEvent(evt);
            };

        var contactLink = document.querySelector('#formSubA');
        simulateClick(contactLink);      
    
    }

    


   

    
    
}    

formAct.addEventListener('click',formGrab);    
    
   
</script> 


<?php
get_footer();
            
?>