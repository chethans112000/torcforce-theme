// Gallery modal functionality
document.addEventListener('DOMContentLoaded', function() {
    // Add cursor pointer style to gallery items
    const galleryImages = document.querySelectorAll('.gallery-image');
    galleryImages.forEach(image => {
        image.style.cursor = 'pointer';
    });
});

// Open modal function
function openModal(imageSrc, title, description) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    
    modalImage.src = imageSrc;
    modalImage.alt = title;
    modalTitle.textContent = title;
    modalDescription.textContent = description;
    
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
    
    // Add fade-in animation
    setTimeout(() => {
        modal.classList.add('modal-show');
    }, 10);
}

// Close modal function
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.remove('modal-show');
    
    setTimeout(() => {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Restore background scrolling
    }, 300);
}

// Close modal when clicking outside the image
document.addEventListener('click', function(event) {
    const modal = document.getElementById('imageModal');
    if (event.target === modal) {
        closeModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});

// Prevent modal from closing when clicking on the modal content
document.querySelector('.modal-content').addEventListener('click', function(event) {
    event.stopPropagation();
});