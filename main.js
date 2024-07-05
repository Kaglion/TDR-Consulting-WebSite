var swiper = new Swiper(".swiper-container", {
  slidesPerView: 3,
  centeredSlides: true,
  loop: true,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

window.addEventListener("scroll", function () {
  var fixedElement = document.getElementById("fixedElement");
  var targetSection = document.getElementById("home");
  var targetSectionTop = targetSection.getBoundingClientRect().top;
  var targetSectionBottom = targetSection.getBoundingClientRect().bottom;

  if (targetSectionTop <= window.innerHeight && targetSectionBottom >= 0) {
    fixedElement.style.display = "none";
  } else {
    fixedElement.style.display = "block";
  }
});

// Initialize ScrollReveal
ScrollReveal().reveal(".service-item", {
  duration: 1000,
  distance: "50px",
  easing: "ease-in-out",
  origin: "bottom",
  reset: true,
});
