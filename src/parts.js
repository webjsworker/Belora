let banner_partsbutton = document.querySelector('.banner-parts__link');
let banner_form = document.getElementById('bannerpartsform');

banner_partsbutton.addEventListener('click', function () {

    console.log('banner_parts')
    //console.log(banner_form)
    PostUser(banner_form, PRICEPROP, PRICEVALUE, thanks, price);
   
})