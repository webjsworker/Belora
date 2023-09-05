let deliverybutton = document.querySelector('.delivery__form_link');
let formdelivery = document.getElementById('formdelivery')


deliverybutton.addEventListener('click', function () {
    console.log('delivery')

    PostUser(formdelivery, CALLPROP, CALLVALUE, thanks, call);
    /* PostUserShort(formdelivery, CALLPROP, CALLVALUE, thanks, call); */
   
})