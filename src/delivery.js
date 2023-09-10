let deliverybutton = document.querySelector('.delivery__form_link');
let formdelivery = document.getElementById('formdelivery')

deliverybutton.addEventListener('click', function () {
    if(!formstatus){
        formstatus = true
    PostUser(formdelivery, CALLPROP, CALLVALUE, thanks, call);
    }
})