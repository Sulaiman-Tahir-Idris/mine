function openHireForm() {
    window.location.href = "your-hire-me-form-url";
}

function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
}

// Show or hide the button based on the scroll position
window.onscroll = function() {
    showScrollToTopButton();
};

function showScrollToTopButton() {
    var button = document.getElementById("scrollToTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        button.style.display = "block";




        button.style.display = "none";
    }
}
