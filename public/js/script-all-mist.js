// import { gsap } from "gsap";
// import { ScrollTrigger } from "gsap/ScrollTrigger";
// import { Draggable } from "gsap/Draggable";
// import { InertiaPlugin } from "gsap/InertiaPlugin";

document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger, Draggable, InertiaPlugin);
    const buttons = document.querySelectorAll('.btn-interact');

    buttons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            gsap.to(button, {
                y: -5,
                scale: 1.05,
                duration: 0.2,
                ease: 'power3.out'
            });
        });

        button.addEventListener('mouseleave', () => {
            gsap.to(button, {
                y: 0,
                scale: 1,
                duration: 0.5,
                delay: 0.2,
                ease: 'power3.inOut'
            });
        });
    });

    const menuIcon = document.querySelector('.menu-icon');
    const fullScreenNav = document.querySelector('.full-screen-nav');
    const menuIconElement = menuIcon.querySelector('ion-icon');

    menuIcon.addEventListener('click', function() {
        const isOpen = fullScreenNav.style.visibility === 'visible';

        if (isOpen) {
            gsap.to(fullScreenNav, { y: '-100%', duration: 0.5, onComplete: () => {
                    fullScreenNav.style.visibility = 'hidden';
                }});
            gsap.to(menuIconElement, { opacity: 0, duration: 0.25, onComplete: () => {
                    menuIconElement.setAttribute('name', 'menu-outline');
                    gsap.to(menuIconElement, { opacity: 1, duration: 0.25 });
                }});
        } else {
            fullScreenNav.style.visibility = 'visible';
            gsap.fromTo(fullScreenNav, { y: '-100%'}, { y: '0%', duration: 0.5 });
            gsap.to(menuIconElement, { opacity: 0, duration: 0.25, onComplete: () => {
                    menuIconElement.setAttribute('name', 'close-outline');
                    gsap.to(menuIconElement, { opacity: 1, duration: 0.25 });
                }});
        }
    });


});
