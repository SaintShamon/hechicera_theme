import $ from 'jquery';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";
import {ScrollSmoother} from "gsap/ScrollSmoother";
import {SplitText} from "gsap/SplitText";
import {CustomEase} from "gsap/CustomEase";


gsap.registerPlugin(ScrollTrigger, CustomEase, ScrollSmoother, SplitText);


$(document).ready(function () {
    const smoother = ScrollSmoother.create({
        content: "#main",
        smooth: 2,
        effects: true
    });

    //bg parallax
    smoother.effects(".bg-parallax", {speed: .9});
    smoother.effects(".parallax-bg", {speed: 0.7});

    //texts
    const textHero = document.querySelectorAll(".title-appear-hero");

    textHero.forEach(title => {

        title.split = new SplitText(title, {
            type: "lines,words",
            linesClass: "split-line",
            wordsClass: "split-word"
        });
        $(title).addClass('splitted');

        title.anim = gsap.set(title.split.words, {
            yPercent: 100,
        });
    });

    const titles = document.querySelectorAll(".title-appear");

    titles.forEach(title => {

        title.split = new SplitText(title, {
            type: "lines,words",
            linesClass: "split-line",
            wordsClass: "split-word"
        });

        // Set up the anim
        title.anim = gsap.set(title.split.words, {
            yPercent: 100,
        });
    });

    const texts = document.querySelectorAll(".text-appear p");

    texts.forEach(text => {

        text.split = new SplitText(text, {
            type: "lines",
            linesClass: "split-line",
        });
        $(text).addClass('splitted');
        $(text).find('.split-line').wrap('<div class="line-wrapper">');

        // Set up the anim
        text.anim = gsap.set(text.split.lines, {
            yPercent: 100,
        });
    });


    function appearenceAnimations() {
        //hero image
        const hero = $('.hero-image-animation');
        if (hero.length) {
            let heroImageLayer_1 = hero.find('.layer-1');
            let heroImageLayer_2 = hero.find('.layer-2');
            let heroImageLayer_3 = hero.find('.layer-3');

            heroImageLayer_3.anim = gsap.fromTo(heroImageLayer_3,
                {
                    opacity: 0,
                    scale: 0.9,
                },
                {
                    duration: 0.6,
                    delay: 0.3,
                    ease: "circ.out",
                    opacity: 1,
                    scale: 1,
                    stagger: 0.1,
                }
            );
            heroImageLayer_2.anim = gsap.fromTo(heroImageLayer_2,
                {
                    opacity: 0,
                    scale: 0.9,
                    rotate: -10
                },
                {
                    duration: 0.5,
                    delay: 0.3,
                    ease: "circ.out",
                    opacity: 1,
                    scale: 1,
                    rotate: 0,
                    stagger: 0.1,
                }
            );
            heroImageLayer_1.anim = gsap.fromTo(heroImageLayer_1,
                {
                    opacity: 0,
                    yPercent: -20
                },
                {
                    duration: 0.6,
                    delay: 0.6,
                    ease: "circ.out",
                    opacity: 1,
                    yPercent: 0
                }
            );
            smoother.effects(heroImageLayer_1, {speed: 0.95});
        }
        //hero image
        const heroSimple = $('.hero-image-simple-animation');
        if (heroSimple.length) {
            let heroImageLayer_1 = hero.find('.layer-1');

            heroImageLayer_1.anim = gsap.fromTo(heroImageLayer_1,
                {
                    opacity: 0,
                    yPercent: 10
                },
                {
                    duration: 0.6,
                    delay: 0.6,
                    ease: "circ.out",
                    opacity: 1,
                    yPercent: 0
                }
            );
        }


        //text appear hero

        textHero.forEach(title => {


            title.anim = gsap.to(title.split.words, {
                scrollTrigger: {
                    trigger: title,
                    toggleActions: "play",
                    start: "top 80%",
                    markers: false,
                },
                duration: 0.4,
                ease: "circ.out",
                yPercent: 0,
                stagger: 0.1,
            });
        });

        //hero bird animation
        let heroBird = $('.hero .fly-animation');
        if (heroBird.length) {
            gsap.to(heroBird, {
                rotate: 70,
                y: 250,
                x: $(window).width() / 2,
                ease: "none",
                scrollTrigger: {
                    trigger: $('.hero'),
                    start: "top top", // the default values
                    end: "150% top",
                    scrub: true
                },
            });
        }

        //product animations
        $('.product').each(function () {
            let triggerBlock = $(this);
            let animation = $(this).find('.fly-animation');
            if (animation.length) {
                if (animation.hasClass('butterfly-animation')) {
                    gsap.to(animation, {
                        rotate: -10,
                        y: -150,
                        x: -400,
                        ease: "none",
                        scrollTrigger: {
                            trigger: triggerBlock,
                            start: "top bottom", // the default values
                            end: "center top",
                            scrub: true
                        },
                    });
                } else if (animation.hasClass('dragonfly-animation')) {
                    gsap.to(animation, {
                        rotate: -10,
                        y: -300,
                        x: -100,
                        ease: "none",
                        scrollTrigger: {
                            trigger: triggerBlock,
                            start: "top bottom", // the default values
                            end: "center center",
                            scrub: true
                        },
                    });
                } else if (animation.hasClass('bees-animation')) {
                    let bee1 = animation.find('img:nth-child(1)');
                    let bee2 = animation.find('img:nth-child(2)');
                    let bee3 = animation.find('img:nth-child(3)');
                    gsap.to(bee1, {
                        rotate: 10,
                        y: -10,
                        x: 160,
                        ease: "none",
                        scrollTrigger: {
                            trigger: triggerBlock,
                            start: "top bottom", // the default values
                            end: "center center",
                            scrub: true
                        },
                    });
                    gsap.to(bee2, {
                        rotate: -20,
                        y: 20,
                        x: -200,
                        ease: "none",
                        scrollTrigger: {
                            trigger: triggerBlock,
                            start: "top bottom", // the default values
                            end: "center center",
                            scrub: true
                        },
                    });
                    gsap.to(bee3, {
                        rotate: 10,
                        y: 200,
                        x: 250,
                        ease: "none",
                        scrollTrigger: {
                            trigger: triggerBlock,
                            start: "top bottom", // the default values
                            end: "center center",
                            scrub: true
                        },
                    });
                }
            }
        });

        //text_block_repeater animations
        $('.text_block_repeater').each(function () {
            let triggerBlock = $(this);
            let animations = $(this).find('.fly-animation');
            if (animations.length) {
                animations.each(function () {
                    if ($(this).hasClass('butterfly-animation')) {
                        gsap.to($(this), {
                            rotate: 15,
                            y: 200,
                            x: 220,
                            ease: "none",
                            scrollTrigger: {
                                trigger: triggerBlock,
                                start: "20% bottom",
                                end: "center top",
                                scrub: true
                            },
                        });
                    } else if ($(this).hasClass('dragonfly-animation')) {
                        gsap.to($(this), {
                            rotate: -25,
                            y: 250,
                            x: 40,
                            ease: "none",
                            scrollTrigger: {
                                trigger: triggerBlock,
                                start: "5% bottom",
                                end: "center top",
                                scrub: true,
                            }
                        });
                    } else if ($(this).hasClass('bees-animation')) {
                        let bee1 = $(this).find('img:nth-child(1)');
                        let bee2 = $(this).find('img:nth-child(2)');
                        let bee3 = $(this).find('img:nth-child(3)');
                        gsap.to(bee1, {
                            rotate: 10,
                            y: -10,
                            x: 160,
                            ease: "none",
                            scrollTrigger: {
                                trigger: triggerBlock,
                                start: "60% bottom",
                                end: "bottom center",
                                scrub: true
                            },
                        });
                        gsap.to(bee2, {
                            rotate: -20,
                            y: 20,
                            x: -200,
                            ease: "none",
                            scrollTrigger: {
                                trigger: triggerBlock,
                                start: "60% bottom",
                                end: "bottom center",
                                scrub: true
                            },
                        });
                        gsap.to(bee3, {
                            rotate: 10,
                            y: 200,
                            x: 250,
                            ease: "none",
                            scrollTrigger: {
                                trigger: triggerBlock,
                                start: "60% bottom",
                                end: "bottom center",
                                scrub: true
                            },
                        });
                    }
                })
            }

        });

        //explore animations
        $('.explore').each(function () {
            let triggerBlock = $(this);
            let animations = $(this).find('.fly-animation');
            if (animations.length) {
                animations.each(function () {
                    if ($(this).hasClass('cricket-animation')) {
                        gsap.to($(this), {
                            rotate: 40,
                            y: -150,
                            x: 210,
                            ease: "none",
                            scrollTrigger: {
                                trigger: triggerBlock,
                                start: "12% bottom",
                                end: "center top",
                                scrub: true
                            },
                        });
                    } else if ($(this).hasClass('butterfly-animation')) {
                        let butterfly1 = $(this).find('img:nth-child(1)');
                        let butterfly2 = $(this).find('img:nth-child(2)');
                        gsap.to(butterfly1, {
                            rotate: -30,
                            y: 140,
                            x: -100,
                            ease: "none",
                            scrollTrigger: {
                                trigger: triggerBlock,
                                start: "20% bottom",
                                end: "bottom center",
                                scrub: true
                            },
                        });
                        gsap.to(butterfly2, {
                            rotate: 50,
                            y: -230,
                            x: 80,
                            ease: "none",
                            scrollTrigger: {
                                trigger: triggerBlock,
                                start: "60% bottom",
                                end: "bottom center",
                                scrub: true
                            },
                        });
                    }
                })
            }
        });

        //titles appearing
        const titles = document.querySelectorAll(".title-appear");

        titles.forEach(title => {


            title.anim = gsap.to(title.split.words, {
                scrollTrigger: {
                    trigger: title,
                    toggleActions: "play",
                    start: "top 80%",
                    markers: false,
                },
                duration: 0.4,
                ease: "circ.out",
                yPercent: 0,
                stagger: 0.1,
            });
        });

        const texts = document.querySelectorAll(".text-appear p");

        texts.forEach(text => {
            // Set up the anim
            text.anim = gsap.to(text.split.lines, {
                scrollTrigger: {
                    trigger: text,
                    toggleActions: "play",
                    start: "top 80%",
                    markers: false,
                },
                duration: 0.4,
                ease: "circ.out",
                yPercent: 0,
                stagger: 0.1,
            });
        });

        $(".explore").each(function () {
            let block = $(this);
            let image = $(this).find('.arc-heading');
            let palm = $(this).find('.palm');
            //bottle rotation
            gsap.set(image, {scale: 0.8, opacity: 0, yPercent: 10});
            gsap.set(palm, {yPercent: 100});
            image.anim = gsap.to(image, {
                scrollTrigger: {
                    trigger: image,
                    toggleActions: "play",
                    start: "top 80%",
                    markers: false,
                },
                duration: 0.7,
                ease: "circ.out",
                yPercent: 0,
                scale: 1,
                opacity: 1,
                stagger: 0.1,
            });
            palm.anim = gsap.to(palm, {
                scrollTrigger: {
                    trigger: image,
                    toggleActions: "play",
                    start: "top 70%",
                    markers: false,
                },
                duration: 0.5,
                ease: "circ.out",
                yPercent: 0,
            });
        });

        $(".product").each(function () {
            let block = $(this);
            let image = $(this).find('.image .layer-1');
            //bottle rotation
            gsap.set(image, {rotate: -10});
            gsap.to(image, {
                rotate: 10,
                ease: "none",
                scrollTrigger: {
                    trigger: block,
                    // start: "top bottom", // the default values
                    // end: "bottom top",
                    scrub: true
                },
            });
        });
    }

    //loader
    const loader = $('.loader-overlay');
    loader.anim = gsap.fromTo(loader,
        {
            opacity: 1
        },
        {
            duration: 0.3,
            delay: 0.2,
            ease: "circ.out",
            opacity: 0,
            onComplete: function () {
                loader.hide();
                $('body').removeClass('not-loaded');
                appearenceAnimations();
            }
        }
    );


});
