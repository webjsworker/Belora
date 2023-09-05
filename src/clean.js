function CleanForm(form) {
    form.reset()
    form.elements[0].classList.remove('actives')
    form.elements[1].classList.remove('actives')
    form.getElementsByTagName('span')[0].style.visibility='hidden'
    form.getElementsByTagName('span')[1].style.visibility='hidden'
   
}

function CleanFormHelp(form) {
    form.elements[0].classList.remove('actives')
    form.elements[1].classList.remove('actives')
    form.elements[2].classList.remove('actives')
    form.getElementsByTagName('span')[0].style.visibility='hidden'
    form.getElementsByTagName('span')[1].style.visibility='hidden'
    form.getElementsByTagName('span')[2].style.visibility='hidden'
}