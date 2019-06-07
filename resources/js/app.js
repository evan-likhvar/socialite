require('./bootstrap');

import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

UIkit.use(Icons);

window.Vue = require('vue');

const app = new Vue({
    el: '#app'
});


var bar = document.getElementById('js-progressbar');
var mess = document.getElementById('js-mes');
//let id = document.getElementById('id').value;

UIkit.upload('.js-upload', {

    url: '/protected/image-upload',
    //url: '/back/customer/image-upload/'+id,
    multiple: false,
    name: 'image',
    allow : '*.(jpg|jpeg|png)',
    mime: 'image/jpg|image/jpeg|image/png',
    maxSize:10000,

    beforeAll: function () {
        console.log('beforeAll');
    },

    beforeSend: function (environment) {
        let token = document.head.querySelector('meta[name="csrf-token"]');
        //let id = document.getElementById('id').value;

        if (token) {
            environment.headers = {'X-CSRF-TOKEN': token.content}
        } else {
            console.error('CSRF token not found.');
        }
        console.log('beforeSend'/*, arguments*/);
    },

    load: function () {
        console.log('load', arguments);
    },
    error: function () {
        console.log('error', arguments);
    },
    complete: function () {
        console.log('complete', arguments);
    },

    loadStart: function (e) {
        console.log('loadStart', arguments);

/*        bar.removeAttribute('hidden');
        bar.max = e.total;
        bar.value = e.loaded;*/
    },

    progress: function (e) {
        console.log('progress', arguments);

/*        bar.max = e.total;
        bar.value = e.loaded;*/
    },

    loadEnd: function (e) {
        console.log('loadEnd', arguments);

/*        bar.max = e.total;
        bar.value = e.loaded;*/
    },

    completeAll: function () {

/*
        let result = JSON.parse(arguments[0].response)

        let newLi = document.createElement('div');
        newLi.innerHTML = '<a class="uk-inline" href="http://cryptopia.localhost/back/images/'+document.getElementById('id').value+'/' +result.image+'"' +
            ' data-caption="Caption 1"><img src="http://cryptopia.localhost/back/images/'+ document.getElementById('id').value+'/' +result.image+'"' +'" alt=""></a>';

        let gallery = document.getElementById('admin-gallery')
        gallery.appendChild(newLi);
*/

    },

    fail: function () {
        console.log('fail');
    }
});
