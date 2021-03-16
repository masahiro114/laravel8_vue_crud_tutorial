<template>
    <div>
        <h3 class="text-center">Home</h3><br/>
        <ul>
           <li><a href="/allposts">All Posts</a></li> 
           <li><a href="/allbords">All Bords</a></li> 
        </ul>
    </div>
</template>
 
<script>
    // export default {
    //     data() {
    //         return {
    //             posts: []
    //         }
    //     },
    //     created() {
    //         this.axios
    //             .get('http://laravel8.local/api/posts')
    //             .then(response => {
    //                 this.posts = response.data;
    //             });
    //     },
    //     methods: {
    //         deletePost(id) {
    //             this.axios
    //                 .delete(`http://laravel8.local/api/post/delete/${id}`)
    //                 .then(response => {
    //                     let i = this.posts.map(item => item.id).indexOf(id); // find index of your object
    //                     this.posts.splice(i, 1)
    //                 });
    //         }
    //     }
    // }
</script>