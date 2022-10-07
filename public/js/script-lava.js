gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

var frame_count_first = 17,
    offset_first = 1420.05;
frame_count_studio = 7,
    offset_studio = 898.75;

function animate() {
    gsap.to(".viewer-first", {
        backgroundPosition: (-offset_first * frame_count_first),
        ease: "steps(" + frame_count_first + ")", // use a stepped ease for the sprite sheet
        scrollTrigger: {
            trigger: ".scene-first",
            start: "top top",
            end: "+=" + (frame_count_first * offset_first),
            pin: true,
            scrub: true,
            // markers: true
        }
    });
    gsap.to(".viewer-studio", {
        backgroundPosition: (-offset_studio * frame_count_studio),
        ease: "steps(" + frame_count_studio + ")", // use a stepped ease for the sprite sheet
        scrollTrigger: {
            trigger: ".scene-studio",
            start: "top top",
            end: "+=" + (frame_count_studio * offset_studio),
            pin: true,
            scrub: true,
            // markers: true
        }
    });
    gsap.to("#arrow-skip", { duration: 1, delay: 0.1, repeatDelay: 0.1, ease: "elastic.in(0.1, 0.1)", y: 5, repeat: 10, yoyo: true});
    gsap.to('#animate-welcome-txt', {duration: 2, delay: 0.2, ease: 'power1.out', y: 0
        // gsap.to('#animate-welcome-box', {duration: 3, delay: 1, ease: 'power1.out', y: 200
        // scrollTrigger: {
        //     trigger: '.main-logo',
        //     start: 'top top+=10%',
        //     end: 'bottom center',
        //     scrub: true,
        // }
    });
    gsap.to('.apple-effect', {y: '250', scrollTrigger: {
            scrub: true,
        }});
    gsap.from('.apple-effect-right', {x: '-250', scrollTrigger: {
            scrub: true,
        }});
    gsap.from('.apple-effect-left', {x: '250', scrollTrigger: {
            scrub: true,
        }});
    gsap.to('.animate-colors-red', {duration: 1, ease: "back.inOut(2)", y: 40});
    gsap.to('.sou-box-red', {duration: 1, ease: "back.inOut(2)", rotate: -40});
    gsap.to('.animate-red-text', {duration: 1, ease: "back.inOut(2)", opacity: 1});
}

window.addEventListener('load', function(){
    animate();
})

// function scrollBottom() {
//     gsap.to(window, {duration: 2, ease: 'none', scrollTo: "#bottom"});
// }

window.onload = function() {
    var src = document.getElementById("inputEmail"),
        dst = document.getElementById("email");
    src.addEventListener('input', function() {
        dst.value = src.value;
    });
};
