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

var CurrentItem = 0;
function Slide(n) {
    const Items = document.getElementsByClassName('item');
    const aItems = Array.from(Items);
    const qtyItems = Items.length;

    CurrentItem = CurrentItem + n;

    // Go back to the first frame
    if( CurrentItem > (qtyItems - 1) ) {
        CurrentItem = 0;
    }
    // Go back to the last frame
    if( CurrentItem < 0 ) {
        CurrentItem = qtyItems - 1;
    }

    aItems.forEach((Item) => {
        
        aItems[CurrentItem].scrollIntoView({
            inline: "start",
            block: "nearest",
            behavior: "smooth"
        });

    });
}

function Runaway(id) {
    id.style.top = Math.round(Math.random() * 250) - 100 +'px';
    id.style.left = Math.round(Math.random() * 250) - 200 +'px';
}