jQuery(document).ready(function(){
  if(screen.width <= 575) {
    jQuery('.banner').slick({
      infinite: true,
      speed: 1000,
      slidesToScroll: 1,
      slidesToShow: 1,
      autoplay:true,
    
    });
  } else {
    jQuery('.banner').slick({
      infinite: true,
      speed: 1000,
      slidesToScroll: 2,
      slidesToShow: 2,
      autoplay:true,
    
    });
  }
});

jQuery(document).ready(function(){
  jQuery('.banner-above-blog').slick({
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    autoplay:true,
    slidesToScroll: 1,
    // fade: true,
  });
});

jQuery(document).ready(function(){
  jQuery('.post-slider').slick({
    dots: true,
    infinite: true,
    arrows: false,
    speed: 1000,
    slidesToShow: 1,
    autoplay:true,
    slidesToScroll: 1
  });
});


jQuery(document).ready(function(){
  jQuery('.instagram .row').slick({
    dots: true,
    infinite: true,
    arrows: true,
    speed: 500,
    slidesToShow: 6,
    autoplay:true,
    slidesToScroll: 1,
    fade: false,
    swipeToSlide: true,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    ]
  });
});

jQuery(document).ready(function(){
  jQuery('.related-posts .row').slick({
    dots: true,
    infinite: true,
    arrows:false,
    speed: 500,
    slidesToShow: 3,
    autoplay:true,
    slidesToScroll: 3,
    fade: false,
    swipeToSlide: true,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }
    ]
  });
});

jQuery(function () {
  jQuery('a[href="#search"]').on('click', function(event) {
    event.preventDefault();
    jQuery('#search').addClass('open');
    jQuery('#search > form > input[type="search"]').focus();
  });

  jQuery('#search, #search button.close').on('click keyup', function(event) {
    if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
      jQuery(this).removeClass('open');
    }
  });
});

jQuery('[data-sidenav]').sidenav();



// When the user scrolls down 50px from the top of the document, show the button
window.onscroll = function() {voice_blog_scrollFunction()};

function voice_blog_scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }

}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
