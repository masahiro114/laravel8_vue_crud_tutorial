<template>
    <div>
        <h3 class="text-center">Add bord</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addbord">
                    <div class="form-group">
                        <label>bord</label>
                        <input type="text" class="form-control" v-model="bord.bord">
                    </div>
                    <button type="submit" class="btn btn-primary">Add bord</button>
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
        methods: {
            addbord() {
 
                this.axios
                    .post('http://laravel8.local/api/bords', this.bord)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>