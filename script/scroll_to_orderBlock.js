const orderSection = document.querySelector('order');
const orderBtn = document.querySelector('orderBtn');

const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
        orderBtn.classList.add('hide'); 
    } else {
        orderBtn.classList.remove('hide');
    }
}, { threshold: 0.2 });

observer.observe(orderSection);

orderBtn.addEventListener('click', (e) => {
    e.preventDefault();
    orderSection.scrollIntoView({ behavior: 'smooth' });
});