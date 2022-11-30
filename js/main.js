import $ from 'jquery';

import {
    lazy
} from './lazy';


import {
    header
} from './template-parts/header/header';


import {
    footer
} from './template-parts/footer/footer';

import {
    mainslider
} from './template-parts/blocks/slider';



header();
footer()
//lazy();
mainslider();
//scrollToAnchor();

// import smooth scroll
import './animations/animations';

// import videojs
import './libs/videojs';