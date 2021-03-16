<template>
    <div>
        <h3 class="text-center">Edit bord</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updatebord">
                    <div class="form-group">
                        <label>bord</label>
                        <input type="text" class="form-control" v-model="bord.bord">
                    </div>
                    <button type="submit" class="btn btn-primary">Update bord</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                bord: {}
            }
        },
        created() {
            this.axios
                .get(`http://laravel8.local/api/bord/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.bord = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updatebord() {
                this.axios
                    .post(`http://laravel8.local/api/bord/update/${this.$route.params.id}`, this.bord)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>