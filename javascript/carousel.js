document.addEventListener('DOMContentLoaded', function() {
    let index = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;
    const slideInterval = 3000; // Interval time in milliseconds (3 seconds)

    function showSlide(n) {
        if (n >= totalSlides) index = 0;
        else if (n < 0) index = totalSlides - 1;
        else index = n;

        const newTransform = `translateX(-${index * 100}%)`;
        document.querySelector('.carousel-slides').style.transform = newTransform;
    }

    function nextSlide() {
        showSlide(index + 1);
    }

    document.querySelector('.carousel-prev').addEventListener('click', function() {
        showSlide(index - 1);
        resetInterval(); // Reset interval when user interacts
    });

    document.querySelector('.carousel-next').addEventListener('click', function() {
        showSlide(index + 1);
        resetInterval(); // Reset interval when user interacts
    });

    // Set interval to automatically move to the next slide
    let slideIntervalId = setInterval(nextSlide, slideInterval);

    // Function to reset the interval
    function resetInterval() {
        clearInterval(slideIntervalId);
        slideIntervalId = setInterval(nextSlide, slideInterval);
    }

    showSlide(index);
});

// Next Step of javaScript Toogle
const mobileMenu = document.getElementById('mobile-menu');
const navbar = document.getElementById('navbar');

mobileMenu.addEventListener('click', () => {
    navbar.classList.toggle('active');
});
// FAQ's ********************************************************************************************************
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const icon = item.querySelector('.faq-icon');
        const answer = item.querySelector('.faq-answer');
        
        item.addEventListener('click', function() {
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
                icon.textContent = '+';
                icon.classList.remove('minus');
                icon.classList.add('plus');
            } else {
                answer.style.display = 'block';
                icon.textContent = '-';
                icon.classList.remove('plus');
                icon.classList.add('minus');
            }
        });
    });
});
// JavaScript for Latest Products
 