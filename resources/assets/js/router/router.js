import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Add from './../components/AddComponent'
import Edit from './../components/EditComponent'
import Login from './../components/LoginComponent'

export default new VueRouter({
    routes: [
        {
            name:'add',path: '/add',props: true, component: Add
        },
        {
            name:'edit',path: '/edit/:id',props: true, component: Edit
        },
        {
            name:'login',path: '/login',component : Login 
        }
    ]
})
