/*!
 * fastshell
 * Fiercely quick and opinionated front-ends
 * https://HosseinKarami.github.io/fastshell
 * @author Hossein Karami
 * @version 1.0.5
 * Copyright 2018. MIT licensed.
 */
// PRELOADER HIDER

$(window).load(function () {
    function loader(){
   $('#loader-wrapper').toggleClass('loader-hide invisible');
   $('body').toggleClass('scroll-hider');
   $('#loading-logo').toggleClass('invisible');
    }
    setTimeout(loader, 2000);
});

'use strict';

// NAVBAR ANIMATIONS

var prev = 0;
var $window = $(window);
var nav = $('.navbar-sticky');

$window.on('scroll', function(){

  var scrollTop = $window.scrollTop();

  nav.toggleClass('nav-fixed-top', scrollTop > prev);

});

// NAVBAR BTN

$(document).ready(function() {
    $('.nav-btn, .mobile-menu-wrapper').click(function() {
        $('.nav-btn').toggleClass('open');
        $('.mobile-menu-wrapper').toggleClass('mobile-menu-show');
    });
});

$(document).ready(function() {
    $('.mobile-nav-link').click(function() {
        $('.nav-btn').toggleClass('open');
        $('.mobile-menu-wrapper').toggleClass('mobile-menu-show');
    });
});

// TO UP BUTTON SMOOTH SCROLL

$(window).scroll(function() {

    if ($(this).scrollTop()>=100)
     {
      $('.toUp').fadeIn(300);
     }
    else
     {
      $('.toUp').fadeOut(300);
     }
 });


$(document).ready(function() {
$(".toUp, .logo").on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: ($(target).offset().top)
        }, 600);
    });
});

// GALLERY ANIMATIONS ON SCROLL

$(document).ready(function(){
 
  // hide our element on page load
  $('.gallery-items').css('opacity', 0);
 
  $('.gallery-items').waypoint(function() {
      $('.gallery-items').addClass('jackInTheBox');
  }, { offset: '70%' });
});

// ANCHOR SMOOTH SCROLLING

$( document ).ready(function() {
    //Scrollspy offset
    $("body").scrollspy({target: "#navbar", offset:200});
});

 $(function() {
  $('a[href*=#]:not([href=#carouselExampleControls])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
&& location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 70 //offsets for fixed header
        }, 500);
        return false;
      }
    }
  });
  //Executed on page load with URL containing an anchor tag.
  if($(location.href.split("#")[1])) {
      var target = $('#'+location.href.split("#")[1]);
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 70 //offset height of header here too.
        }, 500);
        return false;
      }
    }
});