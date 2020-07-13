import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';



Vue.use(VueRouter);
Vue.component('vue-modal',{
    template: '#vue-modal-template'
})

Vue.component(
    'ModalComponent',
    require('./components/ModalComponent.vue')
);
var modal = new Vue({
    el: '#app',
    data: {
        showModal: false
    }
})

var button= new Vue({
  el: '#but',
  data: {
    isFavorite: false
  },
  methods: {
    addToFavorites() {
      this.isFavorite = true;
    },
    deleteFromFavorites() {
      this.isFavorite = false;
    }
  }
})