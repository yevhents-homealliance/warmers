let count__handwarmer = document.getElementById('count__handwarmer');
let count__toewarmer = document.getElementById('count__toewarmer');
let count__bodywarmer = document.getElementById('count__bodywarmer');

const price__warmer = 19.99;  
const wholesale__warmer = 15.99;

function updateTotal() {
    let h = Number(count__handwarmer.value);
    let t = Number(count__toewarmer.value);
    let b = Number(count__bodywarmer.value);

    let totalItems = h + t + b;
    let pricePerItem = totalItems >= 200 ? wholesale__warmer : price__warmer;
    let total = totalItems * pricePerItem;

    document.getElementById('totalCost').innerText = total.toFixed(2);
    document.getElementById('total_price').value = total.toFixed(2);
}

const add_handwarmer = () => {
    count__handwarmer.value = Number(count__handwarmer.value || 0) + 1;
    updateTotal();
};

const add_toewarmer = () => {
    count__toewarmer.value = Number(count__toewarmer.value || 0) + 1;
    updateTotal();
}

const add_bodywarmer = () => { 
    count__bodywarmer.value = Number(count__bodywarmer.value || 0) + 1;
    updateTotal();
}

const remove_handwarmer = () => { 
    if(count__handwarmer.value > 0) count__handwarmer.value--;
    updateTotal();
}
const remove_toewarmer = () => { 
    if(count__toewarmer.value > 0) count__toewarmer.value--;
    updateTotal();
}
const remove_bodywarmer = () => { 
    if(count__bodywarmer.value > 0) count__bodywarmer.value--;
    updateTotal();
}

count__handwarmer.addEventListener("input", updateTotal);
count__toewarmer.addEventListener("input", updateTotal);
count__bodywarmer.addEventListener("input", updateTotal);


updateTotal(); 
