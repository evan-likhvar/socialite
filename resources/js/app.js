require('./bootstrap');

import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';
UIkit.use(Icons);

window.Vue = require('vue');

const app = new Vue({
    el: '#app'
});
