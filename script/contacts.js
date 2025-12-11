const get__button = document.getElementById('contacts'); 
const get__button2 = document.getElementById('contacts2');
const close__button = document.getElementById('close__contacts');
const glass__background = document.querySelector('.glass');
const order__popup = document.querySelector('.order-popup');
const modal = document.querySelector('.modal');

const open__modal = () => {
    order__popup.style.display = 'none';
    glass__background.classList.add("glass__active");
    modal.classList.add("active");
};

const open__modal2 = () => {
    order__popup.style.display = 'block';
    glass__background.classList.add("glass__active");
    modal.classList.add("active");
};

const close__modal = () => {
    glass__background.classList.remove("glass__active");
    modal.classList.remove("active");
    order__popup.style.display = 'block';
};