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





// import smooth scroll
import './animations/animations';

header();
footer()
//lazy();
mainslider();
//scrollToAnchor();
