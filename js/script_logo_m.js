// get height of header
const headerHeight = document.querySelector("body").offsetHeight;
// get header's image element
const elImage = document.querySelector("body #quienes_somos img");

// when the DOM's content is loaded ...
// ... attach scrolling event ...
document.addEventListener("DOMContentLoaded", (event) => {
  window.addEventListener('scroll', () => {
    let scroll = window.pageYOffset;
    // only do animation if header is visible.
    if ( scroll < headerHeight ) {
      // rotate the header's image ...
        //Este es para que rote sobre su eje->
        if (screen.width < 1024) 
        elImage.style.transform = 'rotate(' + (20) + (scroll / headerHeight) * 300 + 'deg)';
          else 
            if (screen.width < 1280) 
            elImage.style.transform = 'rotate(' + (70) + (scroll / headerHeight) * 300 + 'deg)';
            else 
            elImage.style.transform = 'rotate(' + (70) + (scroll / headerHeight) * 300 + 'deg)';
    }
  });
});