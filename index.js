burger = document.querySelector(".burger");
navbar = document.querySelector(".navbar");
navlist = document.querySelector(".nav-list");
rightNav = document.querySelector(".rightNav");

burger.addEventListener('click', function() {
    navbar.classList.toggle('hide-nav');
    rightNav.classList.toggle('visibility-class');
    navlist.classList.toggle('visibility-class');
})