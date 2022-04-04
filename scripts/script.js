
// var slideIndex = 1;
// showSlides(slideIndex);

// function proxSlide(n){
//     showSlides(slideIndex += n);
// }


// function showSlides(n){
//     var i;
//     var slides = document.getElementsByClassName("form");
//     if ( n > slides.length) { slideIndex = 1}
//     if( n < 1 ) {slideIndex = slides.length}

//     for(i = 0; i < slides.length; i++){
//         slides[i].style.display = "none";
//     }

//     slides[slideIndex - 1 ].style.display = "block";
// }


//Esconder e Aparecer Divs
function troca(div){
    var x = document.getElementById(div);
x.style.display = x.style.display == "none" ? "block" : "none";
}
