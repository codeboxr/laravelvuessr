<h3><span style="background-color:hsl(0, 0%, 100%);color:hsl(0, 0%, 30%);"><strong>Laravel-Vue-SSR</strong></span></h3>

<p>Server-side rendering is great way to increase the perception of loading speed in your full-stack app. Users get a complete page with visible content when they load your site, as opposed to an empty page that doesn't get populated until JavaScript runs.</p>

<p>One of the downsides of using Laravel as a backend for Vue.js was the inability to server render your code. Was. The release of Vue.js 2.5.0 has brought server-side rendering support to non-Node.js environments including PHP, Python, Ruby etc.</p>

<p>In this tutorial, I'll take you through the set up steps for Laravel and demonstrate a simple server-rendered app. Get the code for this here on github .</p>

<p>To follow this steps at first you must have to enable phpV8 in your php extensions. &nbsp;</p>

<p>Step by step Laravel Vue SSR</p>

<p><strong>Step 1:</strong>&nbsp; setup a Laravel project and then setup vue in it. We would be use vue-router here so need to install vue-router by&nbsp;</p>

<p>Npm install vue-router --save</p>

<p><strong>Step 2 :</strong> And then we need to create 2 more js files alongside with app.js file. First js file will be entry-client.js and another will be entry-server.js. after that we need to mix those files in webpack.mix.js in the public/js directory. And on the welcome.blade.php we have to use the js/entry-client.js instead of js/app.js.</p>

<p style="text-align:center;">
   <span class="image-inline ck-widget ck-widget_with-resizer" contenteditable="false">
      <img src="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/48f2dd40caeb0b149b14dabfb82888381fa50d1a94d6b79c.png" srcset="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/48f2dd40caeb0b149b14dabfb82888381fa50d1a94d6b79c.png/w_151 151w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/48f2dd40caeb0b149b14dabfb82888381fa50d1a94d6b79c.png/w_231 231w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/48f2dd40caeb0b149b14dabfb82888381fa50d1a94d6b79c.png/w_311 311w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/48f2dd40caeb0b149b14dabfb82888381fa50d1a94d6b79c.png/w_391 391w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/48f2dd40caeb0b149b14dabfb82888381fa50d1a94d6b79c.png/w_471 471w" sizes="100vw" width="471">
<div class="ck ck-reset_all ck-widget__resizer" style="height: 78px; left: 0px; top: 0px; width: 471px; display: none;"><div class="ck-widget__resizer__handle ck-widget__resizer__handle-top-left"></div><div class="ck-widget__resizer__handle ck-widget__resizer__handle-top-right"></div><div class="ck-widget__resizer__handle ck-widget__resizer__handle-bottom-right"></div><div class="ck-widget__resizer__handle ck-widget__resizer__handle-bottom-left"></div><div class="ck ck-size-view" style="display: none;"></div></div></span></p>
<p>And we need to set webpackConfig on the webpack.mix.js file.</p>
<p style="text-align:center;">
   <span class="image-inline ck-widget ck-widget_with-resizer" contenteditable="false">
      <img src="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/393c3cf20cda25b09accd27795737aca79c73f07717bba84.png" srcset="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/393c3cf20cda25b09accd27795737aca79c73f07717bba84.png/w_84 84w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/393c3cf20cda25b09accd27795737aca79c73f07717bba84.png/w_164 164w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/393c3cf20cda25b09accd27795737aca79c73f07717bba84.png/w_244 244w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/393c3cf20cda25b09accd27795737aca79c73f07717bba84.png/w_324 324w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/393c3cf20cda25b09accd27795737aca79c73f07717bba84.png/w_404 404w" sizes="100vw" width="404">
<div class="ck ck-reset_all ck-widget__resizer" style="height: 148px; left: 0px; top: 0px; width: 404px; display: none;"><div class="ck-widget__resizer__handle ck-widget__resizer__handle-top-left"></div><div class="ck-widget__resizer__handle ck-widget__resizer__handle-top-right"></div><div class="ck-widget__resizer__handle ck-widget__resizer__handle-bottom-right"></div><div class="ck-widget__resizer__handle ck-widget__resizer__handle-bottom-left"></div><div class="ck ck-size-view" style="display: none;"></div></div></span></p>
<p><br data-cke-filler="true"></p>
<p><strong>Step 3:</strong> Now we have to create some vue component to work. In this project I have made 3 component page as Home.vue, ListPage.vue and Details.vue and 1 key component as App.vue where er will load all our vue page/component as route.</p>
<p>App.vue</p>
<p> https://gist.github.com/Arafat-Alam/f5fefade3b62e05838c30e0d613ef4a6 </p>
<p>Other Components Home.vue/ListPage.vue/Details.vue </p>
<p> https://gist.github.com/Arafat-Alam/281b82c742eb487ef0ac9cbfe579ae88 </p>
<p><strong>Step 4 :</strong> &nbsp;Create a route.js file alongside with app.js. And setup the vue-router on the page&nbsp;</p>
<p> https://gist.github.com/Arafat-Alam/a933fb504e5eb68d7eed7540e61c6e51 </p>
<p><strong>Step 5:</strong> Now setup the App.js file. On the app.js file import the key vue component App.vue here then import the route.js file and import and setup the vue-router here. And at last create the vue instance.</p>
<p> https://gist.github.com/Arafat-Alam/f6d160c06b236c43c54deea09682a26b </p>
<p><strong>Step 6:</strong> Now we have to setup the entry-client.js file. We need to import the app.js file and route.js files here and on router ready need to mount the app to the #app id.</p>
<p> https://gist.github.com/Arafat-Alam/b77ad1ba4f7a502bbd1b16a7b4166a6a </p>
<p><strong>Step 7:</strong> And then need to setup the entry-server.js file. Here we need to import the app.js file and route.js files and also need to import renderVueComponentToString from vue-server-renderer/basic. And the need to configure the SSR for vue components</p>
<p> https://gist.github.com/Arafat-Alam/e8d7a10cf39a0d6f1ea3feef60a43477 </p>
<p><strong>Step 8 :</strong> On the Laravel routes web.php file need to set a route for all vue requests.</p>
<p> https://gist.github.com/Arafat-Alam/c49375ab9d6d4ba816a991ab4c2707a9 </p>
<p><strong>Step 9:</strong> Now on the controller we received the request and get the path. And call to a user define render function.</p>
<figure class="image ck-widget ck-widget_with-resizer" contenteditable="false">
   <img src="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/bcd2c2f823c83fe2e6074d47cc881d68c8cada75dcc97ada.png" srcset="https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/bcd2c2f823c83fe2e6074d47cc881d68c8cada75dcc97ada.png/w_143 143w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/bcd2c2f823c83fe2e6074d47cc881d68c8cada75dcc97ada.png/w_223 223w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/bcd2c2f823c83fe2e6074d47cc881d68c8cada75dcc97ada.png/w_303 303w, https://33333.cdn.cke-cs.com/rc1DFuFpHqcR3Mah6y0e/images/bcd2c2f823c83fe2e6074d47cc881d68c8cada75dcc97ada.png/w_383 383w" sizes="100vw" width="383">
   <div class="ck ck-reset_all ck-widget__type-around">
      <div class="ck ck-widget__type-around__button ck-widget__type-around__button_before" title="Insert paragraph before block">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 8">
            <path d="M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038"></path>
         </svg>
      </div>
      <div class="ck ck-widget__type-around__button ck-widget__type-around__button_after" title="Insert paragraph after block">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 8">
            <path d="M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038"></path>
         </svg>
      </div>
      <div class="ck ck-widget__type-around__fake-caret"></div>
   </div>
   <div class="ck ck-reset_all ck-widget__resizer" style="height: 104px; left: 0px; top: 0px; width: 383px; display: none;">
      <div class="ck-widget__resizer__handle ck-widget__resizer__handle-top-left"></div>
      <div class="ck-widget__resizer__handle ck-widget__resizer__handle-top-right"></div>
      <div class="ck-widget__resizer__handle ck-widget__resizer__handle-bottom-right"></div>
      <div class="ck-widget__resizer__handle ck-widget__resizer__handle-bottom-left"></div>
      <div class="ck ck-size-view" style="display: none;"></div>
   </div>
</figure>
<p>The render function render the vue components as the url path.</p>
<p> https://gist.github.com/Arafat-Alam/07f4009686a3347187acb96571d1d2f1 </p>
<p><strong>Step 10:</strong> And the method return to the view file with the rendered string.</p>
<p> https://gist.github.com/Arafat-Alam/81649fd79a13aedc414b6fe364421b16 </p>
