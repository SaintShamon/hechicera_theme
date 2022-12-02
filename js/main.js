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
    find_us_form
} from './template-parts/blocks/find_us';

header();
footer()
//lazy();
mainslider();
find_us_form();
//scrollToAnchor();

// import smooth scroll
import './animations/animations';

// import videojs
import './libs/videojs';