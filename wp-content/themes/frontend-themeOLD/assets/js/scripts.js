jQuery(document).ready(function($)  {
    $('.burger').click(function(event){
      $('.burger, .navbar-nav, .header-container, .navigation').toggleClass('active')
   });
   
  
      var heroSwiper = new Swiper('.hero-slider__container', {
        //direction: 'horizontal',
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true,
        },
        autoplay: {
              delay: 7000,
              disableOnInteraction: false,
            },
        bulletElement: 'button',
        scrollbar: {
          hide: true,
            },
        effect: 'fade',
      });

     var productSwiper = new Swiper('.product-slider__container', {
      slidesPerView: 5,
      spaceBetween: 30,
      cursorGrab: true,
      //direction: 'horizontal',
      loop: true,
      grabCursor: true,
      navigation: {
        nextEl: '.product-slider__slide__nav__button-next',
        prevEl: '.product-slider__slide__nav__button-prev',
      },
      // breakpoints: {
      //   1024: {
      //     slidesPerView: 3,
      //     spaceBetween: 20
      //   }
      // }
      // pagination: {
      //   el: '.swiper-pagination',
      //   type: 'bullets',
      //   clickable: true,
      // },
      // autoplay: {
      //       delay: 7000,
      //       disableOnInteraction: false,
      //     },
      // bulletElement: 'button',
      // scrollbar: {
      //   hide: true,
      //     },
      // effect: 'fade',
    });
  
 
   });