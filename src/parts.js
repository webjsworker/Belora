let banner_partsbutton = document.querySelector('.banner-parts__link');
let banner_form = document.getElementById('bannerpartsform');

banner_partsbutton.addEventListener('click', function () {
    if(!formstatus){
        formstatus = true
     PostUser(banner_form, PRICEPROP, PRICEVALUE, thanks, price);
    }
   
})