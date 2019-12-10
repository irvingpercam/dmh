require('./bootstrap');
$('.carousel').carousel()
Array.prototype.forEach.call(document.querySelectorAll('.pd-parallax'), function(elem){
    elem.style.backgroundImage = 'url('+elem.getAttribute('data-parallax-image')+')';
})