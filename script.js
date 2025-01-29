/* script.js */
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelector('.nav-links');

navToggle.addEventListener('click', () => {
    navToggle.classList.toggle('active');
    navLinks.classList.toggle('active');
});

// Close mobile menu when clicking a link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navToggle.classList.remove('active');
        navLinks.classList.remove('active');
    });
});

const gallerySlider = document.querySelector('.gallery-slider');
const gallerySlides = document.querySelectorAll('.gallery-slide');
const prevButton = document.querySelector('.slider-prev');
const nextButton = document.querySelector('.slider-next');
const dotContainer = document.querySelector('.slider-dots');

let currentSlide = 0;

// Create dots dynamically
gallerySlides.forEach((_, index) => {
    const dot = document.createElement('span');
    dot.classList.add('slider-dot');
    dot.addEventListener('click', () => goToSlide(index));
    dotContainer.appendChild(dot);
});

const dots = document.querySelectorAll('.slider-dot');

function updateSlider() {
    const slideWidth = gallerySlides[0].clientWidth;
    gallerySlider.style.transform = `translateX(${-slideWidth * currentSlide}px)`;

    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlide);
    });
}

function goToSlide(index) {
    currentSlide = index;
    updateSlider();
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % gallerySlides.length;
    updateSlider();
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + gallerySlides.length) % gallerySlides.length;
    updateSlider();
}

nextButton.addEventListener('click', nextSlide);
prevButton.addEventListener('click', prevSlide);

updateSlider(); // Initial update