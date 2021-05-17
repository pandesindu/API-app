<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
               
                    <div class="card-body">
                        
                            <table class="table table-bordered w-50 my-2"> 
                                <thead>
                                    <tr>
                                        <td>Nama Level</td>
                                        <td>aksi</td>
                                    </tr>
                                </thead>

                                <tbody>
                                   <tr v-for="item in levels" :key="item.id">
                                    <td>{{item.nama_level}}</td>
                                    <td>edit|delete</td>
                                    </tr>
                                </tbody>

                            </table>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                levels: {}
            };
        },

        methods : {
            loadData(){
                axios.get('api/ambillevel').then(({data}) =>{this.levels = data});
            }
        },

        created(){
            this.loadData();
        },

        mounted() {
            console.log('Component mounted.')
        }
    }

</script>
