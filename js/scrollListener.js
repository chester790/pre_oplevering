window.addEventListener('scroll', function() {
    const header = document.querySelector('.header_top');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});