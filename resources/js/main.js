document.addEventListener('DOMContentLoaded', function() {
    // --- Code for Mobile Navigation (Existing) ---
    const mobileNavIcon = document.querySelector('.mobile-nav-icon');
    const mainNav = document.querySelector('.main_nav');

    mobileNavIcon.addEventListener('click', function() {
        mainNav.classList.toggle('active');
    });

    // --- ADD THIS NEW CODE FOR IMAGE PROTECTION ---

    // Select all the images on the page
    const allImages = document.querySelectorAll('img');

    // Loop through each image
    allImages.forEach(function(image) {
        // Add an event listener for the 'contextmenu' event (the right-click)
        image.addEventListener('contextmenu', function(e) {
            // Prevent the browser's default right-click menu from appearing
            e.preventDefault();
        });

        // Add an event listener to prevent dragging the image
        image.addEventListener('dragstart', function(e) {
            // Prevent the default drag action
            e.preventDefault();
        });
    });
});