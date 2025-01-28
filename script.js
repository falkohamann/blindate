/* script.js */
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelector('.nav-links');
const navMenuLinks = document.querySelectorAll('.nav-links a');

navToggle.addEventListener('click', () => {
    // Toggle the 'open' class on each click
    navLinks.classList.toggle('open');
    navToggle.classList.toggle('open');
});

navMenuLinks.forEach(link => {
    link.addEventListener('click', () => {
        // Only close the menu if it's currently open
        if (navLinks.classList.contains('open')) {
            navLinks.classList.remove('open');
            navToggle.classList.remove('open');
        }
    });
});