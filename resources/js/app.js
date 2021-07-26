import Vue from 'Vue';
import App from './components/App.vue';
import VueRouter from 'vue-router';
import router from './route';

Vue.use(VueRouter);

export default new Vue({
    router,
    render: h => h(App)
});