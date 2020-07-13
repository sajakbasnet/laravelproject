import Vue from 'vue';
Vue.component('modal',{
    template: '#vue-modal-templates'
})
var modal = new Vue({
    el: '#routes',
    data: {
        showModal: false
    }
})
