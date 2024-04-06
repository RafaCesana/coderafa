var SlideIndex = 1;
function NextSlide(n) {
    ShowSlide(SlideIndex = SlideIndex + n);
}

function ShowSlide(n) {

    var Slides = document.getElementsByClassName('my-slides');
    var QtySlides = Slides.length;

    // Go back to the first frame
    if( n > Slides.length ) {
        SlideIndex = 1;
    }
    // Go back to the last frame
    if( n < 1) {
        SlideIndex = Slides.length;
    }

    for(var i=0 ; i<QtySlides ; i++) {
        Slides[i].style.display = "none";
    }
    Slides[SlideIndex-1].style.display = "block";
}