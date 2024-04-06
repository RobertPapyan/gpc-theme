
let blurShown = false;
window.addEventListener('scroll', function() {
    if(blurShown)return;
   const scrollPossition = window.scrollY;
    const section = document.getElementsByClassName('ourValues_section')[0];
    if(section === undefined){ blurShown = true; return;}
    if(scrollPossition + 400 >= section.offsetTop){
        document.getElementsByClassName('ourValues_blur')[0].style.transform = "translateY(0)"
        blurShown = true;
    }
});


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 40,
    breakpoints:{
    980: {
        slidesPerView: 2,
        spaceBetween: 40
      },
    1340:{
        slidesPerView: 3,
        spaceBetween: 40
    }
    },
    // Navigation arrows
    navigation: {
      nextEl: '.slider-next',
      prevEl: '.slider-prev',
    },
  
   
  });