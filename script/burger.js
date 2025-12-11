const burgerBtn = document.getElementById("burgerBtn");
const mobileMenu = document.getElementById("mobileMenu");
const mobileCloseBtn = document.getElementById("mobile-close");

const mobile__order = document.getElementById("mobile__order");
const mobile__product = document.getElementById("mobile__product");
const mobile__slider = document.getElementById("mobile__slider");
const mobile__faq = document.getElementById("mobile__faq");

mobile__order.addEventListener("click", () => {
    burgerBtn.classList.remove("active");
    mobileMenu.classList.remove("active");
});

mobile__product.addEventListener("click", () => {
    burgerBtn.classList.remove("active");
    mobileMenu.classList.remove("active");
});

mobile__slider.addEventListener("click", () => {
    burgerBtn.classList.remove("active");
    mobileMenu.classList.remove("active");
});

mobile__faq.addEventListener("click", () => {
    burgerBtn.classList.remove("active");
    mobileMenu.classList.remove("active");
});

mobileCloseBtn.addEventListener("click", () => {
    burgerBtn.classList.remove("active");
    mobileMenu.classList.remove("active");
});

burgerBtn.addEventListener("click", () => {
    burgerBtn.classList.toggle("active");
    mobileMenu.classList.toggle("active");
});