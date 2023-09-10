function ShowElement(element) {
     element.style.display = 'block'
}

function HiddenElement(element) {
    element.style.display = "none";
    }

function CheckForm(formObj, form) {
    let count = 0
    for (let key in formObj) {
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
    formstatus = false
}

function CheckFormFile(formObj, form) {
    let count = 0
    for (let key in formObj) {
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
    }
    formstatus = false
}


async function PostUser(form, prop, value, thanks, element) {
    let email = new FormData(form)
    email.append(prop, value)
    let request = await fetch('route.php', {
        method: 'POST',
        body: email
    });
    let result = await request.json();
    CheckForm(result, form)
    if (result.result == 'success') {
        callstatus = false;
        form.reset()
        HiddenElement(element)
        ShowElement(thanks)
    }    
}


async function PostUserFile(form, prop, value, thanks, element) {
    let email = new FormData(form)
    email.append(prop, value)
    var input = document.getElementById("file").files;
    email.append('img', input[0]);
    let request = await fetch('route.php', {
        method: 'POST',
        body: email
    });
    let result = await request.json();
    CheckFormFile(result, form)
    if (result.result == 'success') {
        HiddenElement(element)
        ShowElement(thanks)
    }
}
