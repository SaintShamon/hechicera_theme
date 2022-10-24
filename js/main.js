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
    mainslider
} from './template-parts/blocks/slider';

import {
    scrollToAnchor
} from './animations/scroll-to-anchor';

header();
footer()
lazy();
lottie();
mainslider();
scrollToAnchor();