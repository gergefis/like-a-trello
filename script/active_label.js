// Highlights the menu tab of the Current Page
document.addEventListener("DOMContentLoaded", function() {
    var currentPage = window.location.pathname.split("/").pop(); // Παίρνει την τρέχουσα σελίδα από τη διεύθυνση URL
    var menuItems = document.querySelectorAll(".nav-item a");

    menuItems.forEach(function(item) {
        if (item.getAttribute("href") === currentPage) {
            item.parentElement.classList.add("active"); // Προσθέτει την κλάση "active" στον γονέα του στοιχείου <a>
        }
    });
});
