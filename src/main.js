import 'normalize.css';
import './assets/scss/__variables.scss';
import './assets/scss/style.scss';
import Vue from 'vue';
import App from './App.vue';

Vue.config.productionTip = false;

new Vue({
  render: h => h(App),
}).$mount('#app');
