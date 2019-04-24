
    $(document).ready(function () {

        jQuery('.skillbar').each(function () {
            jQuery(this).show(function () {
                jQuery(this).find('.count-bar').animate({
                    width: jQuery(this).attr('data-percent')
                }, 3000);
                var percent = jQuery(this).attr('data-percent');
                jQuery(this).find('.count').html('<span>' + percent + '</span>');
            });
        });
     });





(function($,sr){

  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');

var $ = jQuery;


(function(){


  ///////////////////////////////
  // Set Home Slideshow Height
  ///////////////////////////////

  function setHomeBannerHeight() {
    var windowHeight = jQuery(window).height(); 
    jQuery('#header').height(windowHeight);
  }

  ///////////////////////////////
  // Center Home Slideshow Text
  ///////////////////////////////

  function centerHomeBannerText() {
      var bannerText = jQuery('#header > .center');
      var bannerTextTop = (jQuery('#header').actual('height')/2) - (jQuery('#header > .center').actual('height')/2) - 40;   
      bannerText.css('padding-top', bannerTextTop+'px');    
      bannerText.show();
  }

  function setHeaderBackground() {    
    var scrollTop = jQuery(window).scrollTop(); // our current vertical position from the top 
    
    if (scrollTop > 300 || jQuery(window).width() < 700) { 
      jQuery('#header .top').addClass('solid');
    } else {
      jQuery('#header .top').removeClass('solid');    
    }
  }




  ///////////////////////////////
  // Initialize
  ///////////////////////////////

  jQuery.noConflict();
  setHomeBannerHeight();
  centerHomeBannerText();

  //Resize events
  jQuery(window).smartresize(function(){
    setHomeBannerHeight();
    centerHomeBannerText();
  });
  
})();


  ///////////////////////////////
  // Smooth Scroll
  ///////////////////////////////


smoothScroll.init();




  ///////////////////////////////
  // Animate Css
  ///////////////////////////////
var $ = jQuery;

function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);         
        });
}

$(document).ready(function(){
    $('#scrollToContent').each(function() {
        animationHover(this, 'pulse');
    });
});



  ///////////////////////////////
  // Header Fixed
  ///////////////////////////////



var menu = $('#navigation');
var origOffsetY = menu.offset().top;

function scroll() {
   if ($(window).scrollTop() >= origOffsetY) {
       $('#navigation').addClass('nav-wrap');
       $('#services').addClass('exp');
       //$('.content').addClass('menu-padding');
   } else {
       $('#navigation').removeClass('nav-wrap');
       $('#services').removeClass('exp');
       //$('.content').removeClass('menu-padding');
   }



}

 document.onscroll = scroll;


  ///////////////////////////////
  // Testimonial Slide
  ///////////////////////////////

 $(document).ready(function() {
 
  $("#testimonial-container").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 700,
      paginationSpeed : 400,
      singleItem:true,
  });
 
});

var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 800) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});

filterSelection("all")

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

// Show filtered elements
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
