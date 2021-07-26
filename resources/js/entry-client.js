import app from './app'
import router from './route'

router.onReady(function() {
    app.$mount('#app');
});