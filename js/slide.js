
var glide = new Glide('.glide', {
    autoplay: 2000,
    startAt: 0,
    type:'carousel',
    keyboard: true,
    hoverpause: false,
    perView: 5,
    focusAt: 'center',
    breakpoints: {
        800: {
        perView: 2,
        dragThreshold: 120,
        },
        480: {
        perView: 1,
        dragThreshold: 120,
        }
    }
})

glide.mount()

glide2 = new Glide('.glide2', {
    autoplay: 2500,
    startAt: 0,
    type:'carousel',
    keyboard: true,
    hoverpause: false,
    perView: 2,
    focusAt: 'center',
    breakpoints: {
        800: {
        perView: 2,
        dragThreshold: 120,
        },
        480: {
        perView: 1,
        dragThreshold: 120,
        }
    }
})

glide2.mount()

// generateBulletsAndMountGlide();

// function generateBulletsAndMountGlide(bullets, slides) {
// 	let glideBullets = document.querySelector(bullets);
//     let glideSlides = document.querySelectorAll(slides);

//     for (let i = 0; i < glideSlides.length; i++) {
//         let bullets = document.createElement('button');
//         bullets.classList.add('glide__bullet');
//         bullets.setAttribute("data-glide-dir", '='+i)

//         glideBullets.appendChild(bullets);
//     }
//     glide.mount()
// }