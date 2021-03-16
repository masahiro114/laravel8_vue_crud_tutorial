import Home from './components/Home.vue';

import AllPosts from './components/AllPosts.vue';
import AddPost from './components/AddPost.vue';
import EditPost from './components/EditPost.vue';

import AllBords from './components/AllBords.vue';
import AddBord from './components/AddBord.vue';
import EditBord from './components/EditBord.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'allPosts',
        path: '/allposts',
        component: AllPosts
    },
    {
        name: 'addPost',
        path: '/add/post',
        component: AddPost
    },
    {
        name: 'editPost',
        path: '/edit/post/:id',
        component: EditPost
    },
    {
        name: 'allbords',
        path: '/allbords',
        component: AllBords
    },
    {
        name: 'addBord',
        path: '/add/bord',
        component: AddBord
    },
    {
        name: 'editbord',
        path: '/edit/bord/:id',
        component: EditBord
    }
];