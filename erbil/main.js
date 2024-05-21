document.addEventListener('DOMContentLoaded', function () {
    // Select the mobile icon
    var mobileIcon = document.getElementById('mobile-menu-icon');

    // Select the menu items div
    var menuItems = document.querySelector('.menu-items');

    // Add click event listener to the mobile icon
    mobileIcon.addEventListener('click', function() {
        // Check current display style and toggle it
        menuItems.classList.toggle('open');
        if (menuItems.style.display === 'none' || menuItems.style.display === '') {
            menuItems.style.display = 'flex';
        } else {
            menuItems.style.display = 'none';
        }
    });
});