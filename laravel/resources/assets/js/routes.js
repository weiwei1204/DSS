import Vue from 'vue';
import VueRouter from 'vue-router'; //ES6 Module引入
import ExampleCpmpnent from './components/ExampleComponent.vue';

Vue.use(VueRouter); 

export default new VueRouter({
    routes : [
        { path:'/', component:ExampleCpmpnent}
    ],
    model :'history' 
});