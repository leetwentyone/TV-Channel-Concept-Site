/* Search Toggle */
jQuery(function($){
  jQuery('.search-toggle').click(function(e) {
    e.preventDefault();
    jQuery(".search").toggleClass("search-open");
    jQuery(".search-toggle").toggleClass("search-active");
  })
});

jQuery(function($){
  jQuery('.close-search').click(function(e) {
    e.preventDefault();
    jQuery(".header-search").removeClass("search-open");
  })
});

/* Accordion */
jQuery(function($){
  jQuery(".accordion-item").find(".accordion-heading").click(function() {
    jQuery(this).toggleClass("active-tab").find("span").toggleClass("icon-minus icon-plus");
    jQuery(this).next().toggleClass("open").slideToggle("fast")
  });
});

/* Carousel */
jQuery(document).ready(function(){
  jQuery('.carousel-mode ul').slick({
    autoplay: true,
    autoplaySpeed: 6000,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: false,
    arrows: false,
    responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});

/* Carousel Navigation */
jQuery(function($){
  jQuery('.next-icon').click(function(){
    jQuery('.carousel-mode ul').slick('slickNext');
  });

  jQuery('.prev-icon').click(function(){
    jQuery('.carousel-mode ul').slick('slickPrev');
  });
});

/* Article Navigation */
jQuery(function($){
  jQuery('.next-post').click(function(){
    jQuery('.carousel-mode ul').slick('slickNext');
  });

  jQuery('.prev-post').click(function(){
    jQuery('.carousel-mode ul').slick('slickPrev');
  });
});

/* Read more */
jQuery(function($){
  const content = document.querySelector('.has-readmore');
  const _firsttag = content.children[0];
  const _ftArray = _firsttag.textContent.split(' ');
  const _readmoreCount = _ftArray.length;
  const _maxWords = 55;
  const contentHeight = content.offsetHeight;

  const maxHeight = 55; // set the maximum height
  content.style.maxHeight = maxHeight + 'px'; // apply the max height

  const readMoreBtn = document.querySelector('.read-more');
  if (_readmoreCount < _maxWords) {
    content.classList.add("more-content","shortpara");
  }
  readMoreBtn.addEventListener('click', function(e) {
    e.preventDefault();
      if (content.style.maxHeight === maxHeight + 'px') {
        content.style.maxHeight = contentHeight + 'px';
        readMoreBtn.innerText = 'Read Less';
      } else {
        content.style.maxHeight = maxHeight + 'px';
        readMoreBtn.innerText = 'Read More';
    }
  });
});

jQuery(function($){
  jQuery('.read-more').click(function(e) {
    e.preventDefault();
    jQuery(".has-readmore").toggleClass("more-content");
  })
});