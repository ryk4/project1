/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('footer-component', require('./components/recipePage/FooterComponent.vue').default);

//Recipe
Vue.component('recipe-component', require('./components/RecipeComponent.vue').default);
Vue.component('description-component', require('./components/recipePage/DescriptionComponent.vue').default);
Vue.component('steps-component', require('./components/recipePage/StepsComponent.vue').default);
Vue.component('ingredients-component', require('./components/recipePage/IngredientsComponent.vue').default);

//recipes
Vue.component('recipes-component', require('./components/RecipesComponent.vue').default);


Vue.component('contact-top-component', require('./components/contact/contactTop.vue').default);
Vue.component('get-in-touch-component', require('./components/contact/getInTouch.vue').default);


//recipe add
Vue.component('recipe-add-component', require('./components/RecipeAdd/RecipeAddComponent.vue').default);
Vue.component('recipe-add-top-component', require('./components/RecipeAdd/RecipeAddTopComponent.vue').default);
Vue.component('recipe-add-middle-component', require('./components/RecipeAdd/RecipeAddMiddleComponent.vue').default);




import VueSimpleAlert from "vue-simple-alert";
Vue.use(VueSimpleAlert);

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


 Vue.component('pagination', require('laravel-vue-pagination'));






const app = new Vue({
    el: '#app',
    components: {

    },
    data : {
        
    }
});
