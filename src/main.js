import Vue from "vue";
import App from "./App.vue";

Vue.config.productionTip = false;

import VueRouter from "vue-router";
import VueCarousel from "@chenfengyuan/vue-carousel";
import { library } from "@fortawesome/fontawesome-svg-core";
import {
  faBars,
  faTimes,
  faAngleLeft,
  faAngleRight
} from "@fortawesome/free-solid-svg-icons";
import {
  faTwitter,
  faLinkedin,
  faGithub
} from "@fortawesome/free-brands-svg-icons";

import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import Vue2TouchEvents from "vue2-touch-events";

Vue.use(Vue2TouchEvents);
Vue.use(VueRouter);
library.add(
  faBars,
  faTimes,
  faAngleLeft,
  faAngleRight,
  faTwitter,
  faLinkedin,
  faGithub
);
Vue.component("font-awesome-icon", FontAwesomeIcon);
Vue.component(VueCarousel.name, VueCarousel);

// Importing sub-page components
import AboutMe from "./components/about-me";
import ISMP from "./components/ismp";
import SlideCollection from "./components/slide-collection";

import ProjectPage from "./components/ProjectPage";
import {
  floresta_silenciosa_props,
  costing_nature_props,
  aves_interactive_props,
  airline_fuel_props,
  bay_drift_props,
  plant_friend_props,
  social_progress_props
} from "./project-contents";

// My routes
const routes = [
  { path: "/", component: SlideCollection },
  { path: "/about", component: AboutMe },
  { path: "/ismp", component: ISMP },
  {
    path: "/floresta-silenciosa",
    component: ProjectPage,
    props: floresta_silenciosa_props
  },
  {
    path: "/costing-nature",
    component: ProjectPage,
    props: costing_nature_props
  },
  {
    path: "/aves-interactive",
    component: ProjectPage,
    props: aves_interactive_props
  },
  { path: "/airline-fuel", component: ProjectPage, props: airline_fuel_props },
  { path: "/bay-drift", component: ProjectPage, props: bay_drift_props },
  { path: "/plant-friend", component: ProjectPage, props: plant_friend_props },
  {
    path: "/social-progress",
    component: ProjectPage,
    props: social_progress_props
  }
];

// Create the router instance and pass the `routes` option
/* eslint-disable no-unused-vars */
const router = new VueRouter({
  routes: routes,
  scrollBehavior(to, from, savedPosition) {
    return { x: 0, y: 0 };
  }
});
/* eslint-enable */

new Vue({
  render: h => h(App),
  router,
  components: { App }
}).$mount("#app");
