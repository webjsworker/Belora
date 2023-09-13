let orderPhoneCall = document.querySelector('.header__call');
let call = document.querySelector('.call');
let callbutton = document.querySelector('.call__form_link');
let callclose = document.querySelector('.call__close');
let orderPrice = document.querySelector('.intro__but');
let formcall = document.getElementById('formcall')
let phoneicon = document.querySelector('.header__menu_mobile_call');

const CALLPROP = 'form';
const CALLVALUE = 'call'
let formstatus = false;

orderPhoneCall.addEventListener('click', function () {
    call.style.display = "block";
})

callbutton.addEventListener('click', function () {
    if(!formstatus){
        formstatus = true
         PostUser(formcall, CALLPROP, CALLVALUE, thanks, call);
    }
})

callclose.addEventListener('click', function () {
    call.style.display = "none";
    CleanForm(formcall)
})

phoneicon.addEventListener('click', function () {
    call.style.display = "block";
  })
