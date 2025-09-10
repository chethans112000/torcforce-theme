// Hero Slider Functionality
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.hero-indicator');
    const prevBtn = document.getElementById('heroPrev');
    const nextBtn = document.getElementById('heroNext');
    
    let currentSlide = 0;
    let slideInterval;
    
    // Initialize slider
    function initSlider() {
        showSlide(0);
        startAutoSlide();
    }
    
    // Show specific slide
    function showSlide(index) {
        // Remove active class from all slides and indicators
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        // Add active class to current slide and indicator
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
        
        currentSlide = index;
    }
    
    // Next slide
    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }
    
    // Previous slide
    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev);
    }
    
    // Start auto slide
    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 6000); // Change slide every 6 seconds
    }
    
    // Stop auto slide
    function stopAutoSlide() {
        clearInterval(slideInterval);
    }
    
    // Restart auto slide
    function restartAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
    }
    
    // Event listeners
    nextBtn.addEventListener('click', function() {
        nextSlide();
        restartAutoSlide();
    });
    
    prevBtn.addEventListener('click', function() {
        prevSlide();
        restartAutoSlide();
    });
    
    // Indicator click events
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            showSlide(index);
            restartAutoSlide();
        });
    });
    
    // Pause auto slide on hover
    const heroSection = document.querySelector('.hero');
    heroSection.addEventListener('mouseenter', stopAutoSlide);
    heroSection.addEventListener('mouseleave', startAutoSlide);
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            restartAutoSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            restartAutoSlide();
        }
    });
    
    // Touch/swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    heroSection.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    heroSection.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swipe left - next slide
                nextSlide();
            } else {
                // Swipe right - previous slide
                prevSlide();
            }
            restartAutoSlide();
        }
    }
    
    // Initialize the slider
    initSlider();
});