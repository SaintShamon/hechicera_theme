import $ from 'jquery';
import {
    gsap
} from "gsap";


function scrollToAnchor() {
    var pLink = $(location).attr('origin') + $(location).attr('pathname');
    console.log(pLink);
    $('a[href^="#"]:not(.slider-arrow, .quote--button), .anchor--button a').click(function (e) {
        var itemLink = $(this).attr('href').split('#');
        if (itemLink[0] == pLink) {
            e.preventDefault();
        }
        let href = '#' + itemLink[1];
        $('html, body').animate({
            scrollTop: $(href).offset().top - 100
        }, 500);
    })
    var target = $(location).attr("hash");
    var offset = ($(this).attr('data-offset') ? $(this).attr('data-offset') : 0);
    $('body,html').animate({
        scrollTop: $(target).offset().top - offset - 100
    }, 500);
}

// function scrollToHash() {
//     let hash = window.location.hash.substr(1);
//     if (hash && $('#' + hash).length) {
//         $('html, body').animate({
//             scrollTop: $('#' + hash).offset().top - 100
//         }, 100);
//         $(window).on('carouselInited', function () {
//             $('html, body').animate({
//                 scrollTop: $('#' + hash).offset().top - 100
//             }, 100);
//         })
//     }
// }

// function requestQuoteLink() {
//     $(".quote--button").on("click", function (e) {
//         e.preventDefault();

//         let quoteTarget = $(this).attr("href");
//         let pathArray = window.location.origin + "/#request_a_quote";

//         if ($(quoteTarget).length) {
//             $('html, body').animate({
//                 scrollTop: $(quoteTarget).offset().top - 100
//             }, 1000);
//         } else {
//             window.location.href = pathArray;
//         }

//     });
// }

export {
    scrollToAnchor
    // scrollToHash,
    // requestQuoteLink
};