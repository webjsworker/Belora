/* let orderPhoneCall = document.querySelector('.header__call');
let call = document.querySelector('.call');
let callbutton = document.querySelector('.call__form_link');
let callclose = document.querySelector('.call__close');

let orderPrice = document.querySelector('.intro__call');
let formcall = document.getElementById('formcall') */


/* let formcallactive1 = document.querySelector('.call__form_element1_active');
let formcallactive2 = document.querySelector('.call__form_element2_active'); */


/* let price = document.querySelector('.price');
let priceclose = document.querySelector('.price__close');
let pricebutton = document.querySelector('.price__form_link');
let formprice = document.getElementById('formprice') */

/* let thanks = document.querySelector('.thanks'); */

/* let callss = document.querySelector('.call'); */

function ShowElement(element) {
    console.log('Element showed')
    element.style.display = 'block'
}

function HiddenElement(element) {
    element.style.display = "none";
    console.log('hidden lement')
}

/* function HiddenElement(element){
    element.style.display = "none";
} */

/* let f = setTimeout(ShowElement(callss), 3000); */


/* function HiddenThanks(){
    thanks.style.display = 'none'
} */


function CheckForm(formObj, form) {
    //console.log(formObj)
    let count = 0
    for (let key in formObj) {
        //console.log('--> ', formObj[key])
        //console.log('count--> ', count)
        if (count <= 1) {
            if (!formObj[key]) {
                form.elements[count].classList.add('active')
                form.getElementsByTagName('span')[count].style.visibility = 'visible'
            }
            if (formObj[key]) {
                form.elements[count].classList.remove('active')
                form.getElementsByTagName('span')[count].style.visibility = 'hidden'
            }
        }
        ++count
    }

         /*  console.log(key)
         console.log(user[key]) */


    /*  if (!formObj.name) {
         form.elements[0].classList.add('active')
         form.getElementsByTagName('span')[0].style.visibility='visible'
     }
     if (formObj.name) {
         form.elements[0].classList.remove('active')
         form.getElementsByTagName('span')[0].style.visibility='hidden'
     }
     if (!formObj.phonenumber) {
         form.elements[1].classList.add('active')
         form.getElementsByTagName('span')[1].style.visibility='visible'
     }
     if (formObj.phonenumber) {
         form.elements[1].classList.remove('active')
         form.getElementsByTagName('span')[1].style.visibility='hidden'
     } */
}

function CheckFormFile(formObj, form) {
    //console.log(formObj)
    let count = 0
    for (let key in formObj) {
        //console.log('--> ', formObj[key])
        //console.log('count--> ', count)
        if (count <= 2) {
            if (!formObj[key]) {
                form.elements[count].classList.add('active')
                form.getElementsByTagName('span')[count].style.visibility = 'visible'
            }
            if (formObj[key]) {
                form.elements[count].classList.remove('active')
                form.getElementsByTagName('span')[count].style.visibility = 'hidden'
            }
        }
        ++count
    } }


async function PostUser(form, prop, value, thanks, element) {
    let email = new FormData(form)
    email.append(prop, value)
    let request = await fetch('route.php', {
        method: 'POST',
        body: email
    });
    let result = await request.json();
    //console.log(result)
    CheckForm(result, form)
    if (result.result == 'success') {
        form.reset()
        HiddenElement(element)
        ShowElement(thanks)
        //ShowThanks()
    }
    console.log(result)
    /* let result = await request.json(); */
}


async function PostUserFile(form, prop, value, thanks, element) {
    let email = new FormData(form)
    email.append(prop, value)
    var input = document.getElementById("file").files;        
    email.append('img', input[0]);
   // email.append('img', document.getElementById('file')[0])
    /* fileInputElement.files[0] */

    let request = await fetch('route.php', {
        method: 'POST',
        body: email
    });

    let result = await request.json();

    console.log(result)
    CheckFormFile(result, form)
    if (result.result == 'success') {
       // form.reset()
        HiddenElement(element)
        ShowElement(thanks)
        //ShowThanks()
    }
    /* console.log(result) */


    /* let result = await request.json(); */
}

/* async function PostUserShort(form, prop, value, thanks, element) {
    let email = new FormData(form)
    email.append(prop, value)
    let request = await fetch('route.php', {
        method: 'POST',
        body: email
    });
    let result = await request.json();
    
    CheckForm(result, form)
    if (result.result == 'success') {
        form.reset()
         
        ShowElement(thanks)

         
    }
    console.log(result)
     
} */


/* function CleanForm(form) {
    form.reset()
    form.elements[0].classList.remove('active')
    form.elements[1].classList.remove('active')
    form.getElementsByTagName('span')[0].style.visibility='hidden'
    form.getElementsByTagName('span')[1].style.visibility='hidden'

} */




/* orderPhoneCall.addEventListener('click', function () {
    call.style.display = "block";
    console.log('call button work')
}) */


/* callbutton.addEventListener('click', function () { */
/* console.log('button work ajaks') */
/* PostUser(formcall); */
    //call.style.display = "none";
    //CleanForm(formcall)
    //thanks.style.display = "block";
/* }) */


/* callclose.addEventListener('click', function () {
    call.style.display = "none";
    CleanForm(formcall)
}) */



/* orderPrice.addEventListener('click', function () {
    price.style.display = "block";
})

priceclose.addEventListener('click', function () {
    price.style.display = "none";
    CleanForm(formprice)

})

pricebutton.addEventListener('click', function () {
    price.style.display = "none";
    CleanForm(formprice)
    thanks.style.display = "block";
}) */