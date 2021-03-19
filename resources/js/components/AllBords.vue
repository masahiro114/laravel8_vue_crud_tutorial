<template>
    <div>
        <h3 class="text-center">All Bords</h3><br/>
                <ul>
           <li><a href="/bord/add">Add Bord</a></li> 
        </ul>
 
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Boards</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="bord in bords" :key="bord.id">
                <td>{{ bord.id }}</td>
                <td>{{ bord.bord }}</td>
                <td>{{ bord.created_at }}</td>
                <td>{{ bord.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editBord', params: { id: bord.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteBord(bord.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                bords: []
            }
        },
        created() {
            this.axios
                .get('http://laravel8.local/api/bords')
                .then(response => {
                    this.bords = response.data;
                });
        },
        methods: {
            deleteBord(id) {
                this.axios
                    .delete(`http://laravel8.local/api/bords/${id}`)
                    .then(response => {
                        let i = this.bords.map(item => item.id).indexOf(id); // find index of your object
                        this.bords.splice(i, 1)
                    });
            }
        }
    }
</script>