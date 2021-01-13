gsap.fromTo('.informations', 
{
    y: '10rem',
    opacity: 0
},
{
    y: 0,
    opacity: 1,
    duration: 1,
    ease: 'back.out(1.7)',
    delay: 1.5
});

gsap.fromTo('.img-chamada',
{
    x: '40rem',
    opacity: 0
},
{
    x: 0,
    duration: 2,
    opacity: 1,
    ease: 'back.out(2.0)',
    delay: 0.7
});

gsap.fromTo('.chamada-main',
{
    x: '-40rem',
    opacity: 0
},
{
    x: 0,
    duration: 2,
    opacity: 1,
    ease: 'back.out(1.7)',
    delay: 0.7
});

gsap.fromTo('nav.desktop',
{
    x: '40rem',
    opacity: 0
},
{
    x: 0,
    duration: 3,
    opacity: 1,
    ease: 'back.out(1.7)',
    delay: 0.7
});