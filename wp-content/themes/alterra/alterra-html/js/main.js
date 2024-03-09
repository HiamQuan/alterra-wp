AOS.init({
    disable: false,
    startEvent: "DOMContentLoaded",
    initClassName: "aos-init",
    animatedClassName: "aos-animate",
    useClassNames: false,
    disableMutationObserver: false,
    debounceDelay: 50,
    throttleDelay: 99,
    offset: 120,
    delay: 0,
    duration: 1000,
    easing: "ease",
    once: true,
    mirror: false,
    anchorPlacement: "top-bottom",
});

// const swiper = new Swiper(".swiper", {
//     autoplay: {
//         delay: 2000,
//     },
//     loop: true,
//     slidesPerView: 4,
//     spaceBetween: "25px",
//     breakpoints: {
//         390: {
//             slidesPerView: 1.5,
//         },
//         600: {
//             slidesPerView: 2,
//         },
//         768: {
//             slidesPerView: 2,
//         },
//         992: {
//             slidesPerView: 4,
//         },
//         1300: {
//             slidesPerView: 4,
//         },
//         1600: {
//             slidesPerView: 4,
//         },
//     },
// });

const swiperMember = new Swiper(".swiper-member", {
    autoplay: {
        delay: 2000,
    },
    loop: true,
    slidesPerView: 2,
    spaceBetween: "25px",
    breakpoints: {
        390: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 4,
        },
        1300: {
            slidesPerView: 4,
        },
        1600: {
            slidesPerView: 4,
        },
    },
});
