require('./bootstrap');
require('@fortawesome/fontawesome-free/js/all.js');

// ANCHOR Font awesome
import { library, dom } from '@fortawesome/fontawesome-svg-core'

import { faJediOrder } from '@fortawesome/free-brands-svg-icons'

library.add(faJediOrder);

dom.watch();