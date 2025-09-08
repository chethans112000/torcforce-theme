// Mobile dropdown toggle for header navigation

document.addEventListener('DOMContentLoaded', function() {
    var mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
    mobileDropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('click', function(e) {
            // Only toggle if clicking on the parent, not a link
            if (e.target === dropdown || e.target.classList.contains('chevron')) {
                dropdown.classList.toggle('open');
            }
        });
    });
});
