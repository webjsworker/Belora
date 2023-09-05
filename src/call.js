let orderPhoneCall = document.querySelector('.header__call');
let call = document.querySelector('.call');
let callbutton = document.querySelector('.call__form_link');
let callclose = document.querySelector('.call__close');
let orderPrice = document.querySelector('.intro__but');
let formcall = document.getElementById('formcall')

const CALLPROP = 'form';
const CALLVALUE = 'call'

orderPhoneCall.addEventListener('click', function () {
    call.style.display = "block";
    /* console.log('call button work') */
})


callbutton.addEventListener('click', function () {
    /* console.log('button work ajaks') */
    PostUser(formcall, CALLPROP, CALLVALUE, thanks, call);
    //call.style.display = "none";
    //CleanForm(formcall)
    //thanks.style.display = "block";
})


callclose.addEventListener('click', function () {
    call.style.display = "none";
    CleanForm(formcall)
    //HiddenElement(call)
})

