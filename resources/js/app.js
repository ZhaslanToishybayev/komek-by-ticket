import './bootstrap';

// ==============================
// KOMEK BY TICKET - JavaScript
// ==============================

document.addEventListener('DOMContentLoaded', () => {
    // Date Tabs Functionality
    initDateTabs();

    // Mobile Menu Toggle
    initMobileMenu();

    // Session Card Click Animation
    initSessionCards();

    // Smooth scroll animations
    initScrollAnimations();
});

/**
 * Date Tabs - Switch between dates
 */
function initDateTabs() {
    const tabs = document.querySelectorAll('.date-tab');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            // Remove active from all tabs
            tabs.forEach(t => t.classList.remove('active'));

            // Add active to clicked tab
            this.classList.add('active');

            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);

            // Here you could load movies for the selected date
            const selectedDate = this.dataset.date;
            console.log('Selected date:', selectedDate);
        });
    });
}

/**
 * Mobile Menu Toggle
 */
function initMobileMenu() {
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');

    if (menuBtn && navLinks) {
        menuBtn.addEventListener('click', function () {
            // Toggle menu open state
            this.classList.toggle('open');
            navLinks.classList.toggle('mobile-open');

            // Animate burger icon
            const spans = this.querySelectorAll('span');
            if (this.classList.contains('open')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            } else {
                spans[0].style.transform = '';
                spans[1].style.opacity = '';
                spans[2].style.transform = '';
            }
        });
    }
}

/**
 * Session Cards - Click interaction
 */
function initSessionCards() {
    const sessionCards = document.querySelectorAll('.session-card');

    sessionCards.forEach(card => {
        card.addEventListener('click', function () {
            // Add selected state
            const parent = this.closest('.movie-sessions');
            if (parent) {
                parent.querySelectorAll('.session-card').forEach(c => {
                    c.classList.remove('selected');
                });
            }
            this.classList.add('selected');

            // Get session info
            const time = this.querySelector('.session-time')?.textContent;
            const price = this.querySelector('.session-price')?.textContent;
            const movieTitle = this.closest('.movie-card')?.querySelector('.movie-title')?.textContent;

            console.log(`Selected: ${movieTitle} at ${time} for ${price}`);

            // You could open a modal or redirect to booking page here
        });
    });
}

/**
 * Scroll Animations - Fade in elements on scroll
 */
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe movie cards
    document.querySelectorAll('.movie-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        observer.observe(card);
    });
}
