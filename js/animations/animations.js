import $ from 'jquery';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollSmoother } from "gsap/ScrollSmoother";
import { SplitText } from "gsap/SplitText";
import { CustomEase } from "gsap/CustomEase";


gsap.registerPlugin(ScrollTrigger, CustomEase, ScrollSmoother, SplitText);


$(document).ready(function () {
    const smoother = ScrollSmoother.create({
        content: "#main",
        smooth: 2,
        effects: true
    });

    //bg parallax
    smoother.effects(".bg-parallax", { speed: "auto" });

    //rotate explore

    //text appear hero
    const textHero = document.querySelectorAll(".title-appear-hero");

    textHero.forEach(title => {

        title.split = new SplitText(title, {
            type: "lines,words",
            linesClass: "split-line",
            wordsClass: "split-word"
        });
        $(title).addClass('splitted');
        // Set up the anim
        title.anim = gsap.from(title.split.words, {
            scrollTrigger: {
                trigger: title,
                toggleActions: "play",
                start: "top 80%",
                markers: false,
            },
            duration: 0.4,
            ease: "circ.out",
            yPercent: 100,
            stagger: 0.1,
        });
    });

    //hero bird animation
    let heroBird = $('.hero .fly-animation');
    if(heroBird.length){
        gsap.to(heroBird, {
            rotate: 70,
            y: 250,
            x: $(window).width()/2,
            ease: "none",
            scrollTrigger: {
                trigger: $('.hero'),
                start: "top top", // the default values
                end: "150% top",
                scrub: true
            }, 
        });
    }

    //butterfly
    $('.product').each(function(){
        let product = $(this);
        let animation = $(this).find('.fly-animation');
        if(animation.length){
            if(animation.hasClass('butterfly-animation')){
                gsap.to(animation, {
                    rotate: -10,
                    y: -150,
                    x: -400,
                    ease: "none",
                    scrollTrigger: {
                        trigger: product,
                        start: "top bottom", // the default values
                        end: "center top",
                        scrub: true
                    }, 
                });
            } else if(animation.hasClass('dragonfly-animation')){
                gsap.to(animation, {
                    rotate: -10,
                    y: -300,
                    x: -100,
                    ease: "none",
                    scrollTrigger: {
                        trigger: product,
                        start: "top bottom", // the default values
                        end: "center center",
                        scrub: true
                    }, 
                });
            } else if(animation.hasClass('bees-animation')){
                let bee1 = animation.find('img:nth-child(1)');
                let bee2 = animation.find('img:nth-child(2)');
                let bee3 = animation.find('img:nth-child(3)');
                gsap.to(bee1, {
                    rotate: 10,
                    y: -10,
                    x: 160,
                    ease: "none",
                    scrollTrigger: {
                        trigger: product,
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
                        trigger: product,
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
                        trigger: product,
                        start: "top bottom", // the default values
                        end: "center center",
                        scrub: true
                    }, 
                });
            }
        }
    });
    

    //titles appearing
    const titles = document.querySelectorAll(".title-appear");

    titles.forEach(title => {

        title.split = new SplitText(title, {
            type: "lines,words",
            linesClass: "split-line",
            wordsClass: "split-word"
        });

        // Set up the anim
        title.anim = gsap.from(title.split.words, {
            scrollTrigger: {
                trigger: title,
                toggleActions: "play",
                start: "top 80%",
                markers: false,
            },
            duration: 0.4,
            ease: "circ.out",
            yPercent: 100,
            stagger: 0.1,
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
        text.anim = gsap.from(text.split.lines, {
            scrollTrigger: {
                trigger: text,
                toggleActions: "play",
                start: "top 80%",
                markers: false,
            },
            duration: 0.4,
            ease: "circ.out",
            yPercent: 100,
            stagger: 0.1,
        });
    });

    $(".explore").each(function(){
        let block = $(this);
        let image = $(this).find('.arc-heading');
         //bottle rotation
        gsap.set(image, { rotate: 30 });
        gsap.to(image, {
            rotate: -30,
            ease: "none",
            scrollTrigger: {
            trigger: block,
            // start: "top bottom", // the default values
            // end: "bottom top",
            scrub: true
            }, 
        });
    });

    $(".product").each(function(){
        let block = $(this);
        let image = $(this).find('.image .layer-1');
         //bottle rotation
        gsap.set(image, { rotate: -10 });
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
});
