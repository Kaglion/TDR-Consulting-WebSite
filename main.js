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
  distance: "80px",
  easing: "ease-in-out",
  origin: "bottom",
  reset: true,
});

//send message



   // Show the modal when the page loads
    window.onload = function() {
        document.getElementById('popupModal').style.display = 'block';
    };

    // Close the modal when the close button is clicked
    document.getElementById('closePopup').onclick = function() {
        document.getElementById('popupModal').style.display = 'none';
    };


  // value animation

  function animateValue(obj, start, end, duration) {
  let startValue = start;
  let endValue = end;
  let duration = duration || 2000;
  let startTime = performance.now();

  function animation(currentTime) {
    let elapsed = currentTime - startTime;
    let t = elapsed / duration;
    let beg = startValue;
    let change = endValue - startValue;
    let value = beg + t * change;
    obj.textContent = Math.round(value);

    if (elapsed < duration) {
      requestAnimationFrame(animation);
    }
  }

  requestAnimationFrame(animation);
}

const countElement = document.getElementById('count');
animateValue(countElement, 0, 1000, 3000); // Start from 0, end at 1000, duration 3 seconds
