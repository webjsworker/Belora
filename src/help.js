let help = document.querySelector('.help__link');
let pop_up = document.querySelector('.pop_up');
let pop_up_close = document.querySelector('.pop_up__close');
let help_button = document.querySelector('.pop_up_form__submit');
let pop_up_form = document.querySelector('.pop_up_form__item');
 


const HELPROP = 'form';
const HELPVALUE = 'help'

help.addEventListener('click', function () {
    pop_up.style.display = "block";
})

pop_up_close.addEventListener('click', function () {
    pop_up.style.display = "none";
    pop_up_form.reset()
    //CleanFormHelp(pop_up_form)
})

help_button.addEventListener('click', function (event) {
    event.preventDefault();
    //pop_up.style.display = "none";
    //thanks.style.display = "block";
    let reader =  new FileReader()
    reader.onload = function (e){
        console.log("file onload")
    }
    console.log("Help button")
    PostUserFile(pop_up_form, HELPROP, HELPVALUE, thanks, pop_up)

})