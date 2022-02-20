require('./bootstrap');

import {createApp} from 'vue'
/* Page */
import App from './vue/app'

import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlusSquare, faTrash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faPlusSquare,faTrash)

createApp({
    components: {
        App
},
}).component('fa',FontAwesomeIcon)
    .mount('#app');