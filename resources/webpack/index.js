import Vue from 'vue'
import './fonts'
import  './common/index.sass';
import '@fortawesome/fontawesome-pro/js/all.js';

import Auth from './components/Auth';
import Display from './components/Display';

const modules = require.context('./components', true, /\.vue$/);
const components = modules.keys().reduce((acc, comp) => {
  const module = modules(comp).default;
  return { ...acc, [module.name]: module }
}, {});

document.addEventListener('DOMContentLoaded', function () {
  const app = new Vue({
    el: '#root',
    components,
  });
});
