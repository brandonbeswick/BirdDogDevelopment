function debounce(func, wait = 20, immediate = true){
    var timeout;
    return function(){
        var context = this, args = arguments;
        var later = function(){
            timeout = null;
            if(!immediate) func.apply(context, args);
        };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if(callNow) func.apply(context, args);
    };
};

const slideInImages = document.querySelectorAll('.slide-in');

function checkSlide(e){
    slideInImages.forEach(slideImage =>{
        const slideInAt = (window.scrollY + window.innerHeight) - slideImage.offsetHeight / 2;
        
        const imageBottom = slideImage.offsetTop + slideImage.offsetHeight;
        const isHalfShown = slideInAt > slideImage.offsetTop;
        const isNotScrolledPast = window.scrollY < imageBottom; 
        
        if(isHalfShown && isNotScrolledPast){
            slideImage.classList.add('active');
        }else{
            slideImage.classList.remove('active');            
        }
             
    });

}

window.addEventListener('scroll', debounce(checkSlide));

const menuDrop = document.querySelector('.menu-drop');
const siteNav = document.querySelector('.site-nav');
const menuClose = document.querySelector('.site-nav ul:first-child > li:first-child');

const subMenuTrigger = document.querySelector('.menu-item-has-children');
const subMenu = document.querySelector('.sub-menu');

console.log(menuClose);


function dropDown() {
    siteNav.classList.add("grow");

}
function closeDrop() {
    siteNav.classList.remove("grow");

}

menuDrop.addEventListener('click', dropDown);
menuClose.addEventListener('click', closeDrop); 

const hiddenTip = document.querySelector('.icon-tip'); 

function iconDrop(e){ 

    var closeTips = document.querySelectorAll('.show'); 
    console.log(closeTips);
    closeTips.forEach((classShow) =>{
        classShow.classList.remove('show');
    }); 
    var clickedObj = e.target;
    var findHidden = clickedObj.parentNode;
    var hiddenMenu = findHidden.childNodes; 
    hiddenMenu[5].classList.add('show');
    
}
document.addEventListener('click',iconDrop);
/*
const menuDrop = document.querySelector('.menu-item-type-custom');
const menuUl = document.querySelector('.menu');

console.log(menuUl);

function dropDown(e){
const menuHeight = (document.querySelector('.menu')).offsetHeight; 
    if(menuHeight > 100){
        menuUl.style.height = '90px';        
    }
    else{
        menuUl.style.height = '720px';
    }

}

menuDrop.addEventListener('click', dropDown);

*/

(function() {
  "use strict";

  var elements = stripe.elements({
    // Stripe's examples are localized to specific languages, but if
    // you wish to have Elements automatically detect your user's locale,
    // use `locale: 'auto'` instead.
    locale: window.__exampleLocale
  });

  /**
   * Card Element
   */
  var card = elements.create("card", {
    iconStyle: "solid",
    style: {
      base: {
        iconColor: "#fff",
        color: "#fff",
        fontWeight: 400,
        fontFamily: "Helvetica Neue, Helvetica, Arial, sans-serif",
        fontSize: "16px",
        fontSmoothing: "antialiased",

        "::placeholder": {
          color: "#BFAEF6"
        },
        ":-webkit-autofill": {
          color: "#fce883"
        }
      },
      invalid: {
        iconColor: "#FFC7EE",
        color: "#FFC7EE"
      }
    }
  });
  card.mount("#example5-card");

  /**
   * Payment Request Element
   */
  var paymentRequest = stripe.paymentRequest({
    country: "US",
    currency: "usd",
    total: {
      amount: 2500,
      label: "Total"
    },
    requestShipping: true,
    shippingOptions: [
      {
        id: "free-shipping",
        label: "Free shipping",
        detail: "Arrives in 5 to 7 days",
        amount: 0
      }
    ]
  }); 
  paymentRequest.on("token", function(result) {
    var example = document.querySelector(".example5");
    example.querySelector(".token").innerText = result.token.id;
    example.classList.add("submitted");
    result.complete("success");
  });

  var paymentRequestElement = elements.create("paymentRequestButton", {
    paymentRequest: paymentRequest,
    style: {
      paymentRequestButton: {
        theme: "light"
      }
    }
  });

  paymentRequest.canMakePayment().then(function(result) {
    if (result) {
      document.querySelector(".example5 .card-only").style.display = "none";
      document.querySelector(
        ".example5 .payment-request-available"
      ).style.display =
        "block";
      paymentRequestElement.mount("#example5-paymentRequest");
    }
  });

  registerElements([card], "example5");
})();