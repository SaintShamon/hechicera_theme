import $ from 'jquery';

import {
    lazy
} from './lazy';

import {
    lottie
} from './lottie';

import {
    header
} from './template-parts/header/header';

import {
    footer
} from './template-parts/footer/footer';

import {
    scrollToAnchor
} from './animations/scroll-to-anchor';

import {
    mainslider
} from './template-parts/blocks/slider';

header();
footer()
lazy();
lottie();
mainslider();
scrollToAnchor();