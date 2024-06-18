// import { gsap } from "gsap";
// import { ScrollTrigger } from "gsap/ScrollTrigger";
// import { Draggable } from "gsap/Draggable";
// import { InertiaPlugin } from "gsap/InertiaPlugin";

document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger, Draggable, InertiaPlugin);
    const buttons = document.querySelectorAll('.btn-interact');

    // GSAP timelines
    const animateElements = (trigger, start, end, elements) => {
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: trigger,
                start: start,
                end: end,
                scrub: false,
                markers: false
            }
        });
        elements.forEach((el, i) => {
            tl.to(el, {
                y: 0,
                opacity: 1,
                duration: 0.6,
                ease: "power4.out"
            }, i === 0 ? 0 : "-=0.4");
        });
    };

    animateElements(".born-1", "top 75%", "bottom 25%", [".born-1", ".born-2"]);
    animateElements(".born-3", "top 75%", "bottom 25%", [".born-3", ".born-4"]);
    animateElements(".born-5", "top 75%", "bottom 25%", [".born-5", ".born-6"]);
    animateElements(".born-7", "top 75%", "bottom 25%", [".born-7", ".born-8"]);

    // const paddingAnimation = (trigger, padding) => {
    //     gsap.to(trigger, {
    //         scrollTrigger: {
    //             trigger: trigger,
    //             start: "top 75%",
    //             end: "top 25%",
    //             scrub: true,
    //             toggleActions: "play none none reverse"
    //         },
    //         paddingLeft: padding,
    //         paddingRight: padding,
    //         duration: 1
    //     });
    // };
    //
    // paddingAnimation(".shrinky-1", "3rem");
    // paddingAnimation(".shrinky-2", "3rem");
    // paddingAnimation(".shrinky-3", "3rem");
    // paddingAnimation(".shrinky-4", "3rem");
    // paddingAnimation(".shrinky-5", "3rem");

    const scaleAnimation = (trigger) => {
        gsap.to(trigger, {
            scrollTrigger: {
                trigger: trigger,
                start: "top 75%",
                end: "top 25%",
                scrub: true,
                toggleActions: "play none none reverse"
            },
            y: 0,
            scale: 1,
            duration: 1
        });
    };

    scaleAnimation(".bloom-1");
    scaleAnimation(".bloom-2");
    scaleAnimation(".bloom-3");
    scaleAnimation(".bloom-4");

    const sizeAnimation = (trigger, height, width) => {
        gsap.to(trigger, {
            scrollTrigger: {
                trigger: trigger,
                start: "top 75%",
                end: "top 25%",
                scrub: true,
                toggleActions: "play none none reverse"
            },
            height: height,
            width: width,
            duration: 1
        });
    };

    sizeAnimation(".boop-1", 85, 85);
    sizeAnimation(".boop-2", 85, 85);
    sizeAnimation(".boop-3", 85, 85);
    sizeAnimation(".boop-4", 85, 85);
    sizeAnimation(".boop-5", 32, 32);
    sizeAnimation(".boop-6", 32, 32);
    sizeAnimation(".boop-7", 32, 32);
    sizeAnimation(".boop-8", 32, 32);


    // Initialize Draggable
    Draggable.create(".ages-container", {
        type: "x",
        edgeResistance: 0.65,
        bounds: {
            minX: -document.querySelector(".ages-container").scrollWidth + document.querySelector(".ages-wrapper").offsetWidth,
            maxX: 0
        },
        inertia: true,
        throwProps: true,
        onPress: function () {
            gsap.to(this.target.querySelectorAll(".age"), {
                scale: 0.9,
                duration: 0.3,
                ease: "power2.out"
            });
        },
        onRelease: function () {
            gsap.to(this.target.querySelectorAll(".age"), {
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
        }
    });

    gsap.to("#brand img", {
        opacity: 0.7,
        // scale: 0.7,
        duration: 1,
        stagger: {
            from: "left",
            amount: 1
        },
        ease: "power3.out",
        scrollTrigger: {
            trigger: "#brand",
            start: "top 80%", // Adjust as needed
            toggleActions: "play none none reverse"
        }
    });


});
