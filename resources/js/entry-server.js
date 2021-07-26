import app from './app'
import router from './route'
import renderVueComponentToString from 'vue-server-renderer/basic';

new Promise((resolve, reject) => {
  router.push(url);
  router.onReady(() => {
    const matchedComponents = router.getMatchedComponents();
    if (!matchedComponents.length) {
      return reject({ code: 404 });
    }
    resolve(app);
  }, reject);
})
.then(app => {
  renderVueComponentToString(app, (err, res) => {
      if (res) {
        print(res);
      } else {
        print(err);
      }
  });
})
.catch((err) => {
    print(err);
});