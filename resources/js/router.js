import Vue from 'vue';
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    { path: '/data-user', component:require('./components/pengguna/datapengguna.vue').default },
    { path: '/data-level', component:require('./components/pengguna/datalevel.vue').default },
    { path: '/home', component:require('./pages/Home.vue').default },
    {name: 'motor', path: '/motor', component:require('./components/motor/Motor.vue').default },
    {path: '/motor/tambah', component:require('./components/motor/AddMotor.vue').default},
    { name : 'DetailMotor', path:'/motor/:id', component:require('./components/motor/DetailMotor.vue').default },
    { name : 'EditMotor', path:'/motor/edit/:id', component:require('./components/motor/EditMotor.vue').default },
]

const router = new VueRouter ({
    mode : 'history',
    routes
})

export default router 