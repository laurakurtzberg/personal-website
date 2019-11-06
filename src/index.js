import Vue from 'vue'
import VueRouter from 'vue-router'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faBars, faTimes, faAngleLeft, faAngleRight } from '@fortawesome/free-solid-svg-icons'
import { faTwitter, faLinkedin, faGithub } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.use(VueRouter);
library.add(faBars, faTimes, faAngleLeft, faAngleRight, faTwitter, faLinkedin, faGithub);
Vue.component('font-awesome-icon', FontAwesomeIcon);


// Importing sub-page components
import MainContent from './views/main-content';
Vue.component('mainContent', MainContent);
import AboutMe from './views/about-me';
import ISMP from './views/ismp';
import SlideCollection from './views/slide-collection';

// My routes
const routes = [
  { path: '/', component: SlideCollection },
  { path: '/about', component: AboutMe },
  { path: '/ismp', component: ISMP }
]

// Create the router instance and pass the `routes` option
const router = new VueRouter({
  routes: routes
});

// Create and mount the root instance.
const app = new Vue({
  router
}).$mount('#mainContent');
