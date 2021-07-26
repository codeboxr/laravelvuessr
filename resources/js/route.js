import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

let routes = [
    {path: '/', component: require('./components/Home.vue').default },
    {path: '/list', component: require('./components/ListPage.vue').default },
    {path: '/details', component: require('./components/Details.vue').default },
];

export default new VueRouter({
    hashbang: false,
    mode: "history",
    linkActiveClass: "active",
    scrollBehavior(to, from, savedPosition) {
        return { x: 0, y: 0 };
    },
    routes,
});