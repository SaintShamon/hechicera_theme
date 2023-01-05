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
import {
    awardslider
} from './template-parts/blocks/awards_slider';

import './template-parts/blocks/where_to_buy';


header();
footer()
//lazy();
mainslider();
awardslider();
//scrollToAnchor();



// import smooth scroll
import './animations/animations';

// import videojs
import './libs/videojs';