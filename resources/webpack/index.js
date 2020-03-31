import Vue from 'vue'

const componentns = require.context('./components', true, /\.vue/);

console.log(componentns);

document.addEventListener('DOMContentLoaded', function () {
  const app = new Vue({
    el: '#root',
  });
});
