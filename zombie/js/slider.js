/**
 * Zombie Theme - Slider Initializations
 * Uses Swiper.js for all slider functionality
 * Version: 1.0.0
 */

document.addEventListener('DOMContentLoaded', function () {

  // ========================================
  // GALLERY SLIDER
  // ========================================
  // Used for image galleries, photo grids
  if (document.querySelector('.gallery-swiper')) {
    const gallerySliders = document.querySelectorAll('.gallery-swiper');

    gallerySliders.forEach(function (slider) {
      new Swiper(slider, {
        loop: true,
        speed: 600,
        spaceBetween: 30,
        slidesPerView: 1,
        pagination: {
          el: slider.querySelector('.swiper-pagination'),
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: slider.querySelector('.swiper-button-next'),
          prevEl: slider.querySelector('.swiper-button-prev'),
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 25,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
        // Accessibility
        a11y: {
          enabled: true,
          prevSlideMessage: 'Previous slide',
          nextSlideMessage: 'Next slide',
          firstSlideMessage: 'This is the first slide',
          lastSlideMessage: 'This is the last slide',
        },
        // Keyboard control
        keyboard: {
          enabled: true,
          onlyInViewport: true,
        },
      });
    });
  }

  // ========================================
  // TESTIMONIAL SLIDER
  // ========================================
  // Used for customer testimonials, reviews
  if (document.querySelector('.testimonial-swiper')) {
    const testimonialSliders = document.querySelectorAll('.testimonial-swiper');

    testimonialSliders.forEach(function (slider) {
      new Swiper(slider, {
        loop: true,
        speed: 800,
        autoplay: {
          delay: 6000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        pagination: {
          el: slider.querySelector('.swiper-pagination'),
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
          },
        },
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        // Accessibility
        a11y: {
          enabled: true,
        },
        // Keyboard control
        keyboard: {
          enabled: true,
        },
      });
    });
  }

  // ========================================
  // CONTENT SLIDER WITH CTA
  // ========================================
  // Used for content sections with call-to-action
  if (document.querySelector('.content-swiper')) {
    const contentSliders = document.querySelectorAll('.content-swiper');

    contentSliders.forEach(function (slider) {
      new Swiper(slider, {
        loop: true,
        speed: 600,
        spaceBetween: 30,
        pagination: {
          el: slider.querySelector('.swiper-pagination'),
          type: 'bullets',
          clickable: true,
        },
        navigation: {
          nextEl: slider.querySelector('.swiper-button-next'),
          prevEl: slider.querySelector('.swiper-button-prev'),
        },
        // Accessibility
        a11y: {
          enabled: true,
          prevSlideMessage: 'Previous slide',
          nextSlideMessage: 'Next slide',
        },
        // Keyboard control
        keyboard: {
          enabled: true,
        },
      });
    });
  }

  // ========================================
  // HERO SLIDER
  // ========================================
  // Used for full-width hero/banner sections
  if (document.querySelector('.hero-swiper')) {
    const heroSliders = document.querySelectorAll('.hero-swiper');

    heroSliders.forEach(function (slider) {
      new Swiper(slider, {
        loop: true,
        speed: 1000,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: slider.querySelector('.swiper-pagination'),
          clickable: true,
        },
        navigation: {
          nextEl: slider.querySelector('.swiper-button-next'),
          prevEl: slider.querySelector('.swiper-button-prev'),
        },
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        // Accessibility
        a11y: {
          enabled: true,
        },
        // Keyboard control
        keyboard: {
          enabled: true,
        },
      });
    });
  }

  // ========================================
  // LOGO CAROUSEL
  // ========================================
  // Used for partner logos, client logos
  if (document.querySelector('.logo-swiper')) {
    const logoSliders = document.querySelectorAll('.logo-swiper');

    logoSliders.forEach(function (slider) {
      new Swiper(slider, {
        loop: true,
        speed: 5000,
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
        },
        slidesPerView: 2,
        spaceBetween: 30,
        freeMode: true,
        breakpoints: {
          640: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 50,
          },
        },
      });
    });
  }

  // ========================================
  // PRODUCT SLIDER (WooCommerce)
  // ========================================
  // Used for related products, product galleries
  if (document.querySelector('.product-swiper')) {
    const productSliders = document.querySelectorAll('.product-swiper');

    productSliders.forEach(function (slider) {
      new Swiper(slider, {
        loop: false,
        speed: 600,
        spaceBetween: 30,
        slidesPerView: 1,
        navigation: {
          nextEl: slider.querySelector('.swiper-button-next'),
          prevEl: slider.querySelector('.swiper-button-prev'),
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 25,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
        // Accessibility
        a11y: {
          enabled: true,
        },
        // Keyboard control
        keyboard: {
          enabled: true,
        },
      });
    });
  }

  // ========================================
  // THUMBS GALLERY (Product Images)
  // ========================================
  // Used for product image galleries with thumbnails
  if (document.querySelector('.gallery-thumbs')) {
    const galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });

    const galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
    });
  }

  console.log('Zombie Theme: Swiper sliders initialized');
});