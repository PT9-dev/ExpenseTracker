import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Welcome from './components/Welcome'
import App from './components/App'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/wel',
            name: 'welcome',
            component: Welcome,
            props: {title: "This is welcome page"}
        }
    ]
})

const app = new Vue({
    el: '#app',
    components: {App},
    router,
});
