let burger = document.querySelector('.header__burger_line');
let menu = document.querySelector('.header__menu');

burger.addEventListener('click', function(){
    burger.classList.toggle('active');
	menu.classList.toggle('active');
})

menu.addEventListener('click', function(){
    burger.classList.toggle('active');
	menu.classList.toggle('active');
})

/* document.addEventListener('click',e => console.log(e.target)) */
