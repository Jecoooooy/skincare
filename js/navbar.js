
let lastScrollTop = 100;
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop <= 10) {
        navbar.classList.remove('bg-white')
        navbar.classList.remove('shadow-lg')
        navbar.classList.add('shadow-sm')
    }else{
        navbar.classList.add('bg-white')
        navbar.classList.add('shadow-lg')
        navbar.classList.remove('shadow-sm')
    }
    if (scrollTop > lastScrollTop) {
        // Scrolling down
        navbar.style.top = "-180px";
    } else {
        // Scrolling up
        navbar.style.top = "0";

    }
    lastScrollTop = scrollTop <= 100 ? 100 : scrollTop; // For mobile or negative scrolling
});