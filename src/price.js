let price = document.querySelector('.price');
let priceclose = document.querySelector('.price__close');
let pricebutton = document.querySelector('.price__form_link');
let formprice = document.getElementById('formprice')

const PRICEPROP = 'form';
const PRICEVALUE = 'price'

orderPrice.addEventListener('click', function () {
    price.style.display = "block";
})

priceclose.addEventListener('click', function () {
    price.style.display = "none";
    CleanForm(formprice)
})

pricebutton.addEventListener('click', function () {
    if(!formstatus){
        formstatus = true
        PostUser(formprice, PRICEPROP, PRICEVALUE, thanks, price);
    }
})