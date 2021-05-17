<template>
    <div class="container">
        <router-link to="/motor/tambah" class="btn btn-primary my-2">Tambah Data</router-link>
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">PLAT NOMOR</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Modal</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="data in motors" :key='data.id'>
                    <td>{{data.plat_nomor}}</td>
                    <td>{{data.nama_motor}}</td>
                    <td>{{data.modal}}</td>
                    <td>
                        <router-link :to="{name: 'DetailMotor', params: {id:data.id}}" class="btn btn-default">Detail</router-link>
                        <router-link :to="{name: 'EditMotor', params: {id:data.id}}" class="btn btn-warning">Edit</router-link>
                        <a href="" @click.prevent="handlingDelete(data.id)" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                </tbody>
            </table>

        
    </div> 
</template>


<script>
    export default {
        data(){
            return {
                motors: {}
            };
        },

        mounted() {
            this.getMotors()
        },

        methods : {
            getMotors(){
                axios.get('/api/motor').then((response)=> {
                console.log(response)
                this.motors=response.data
                }) 
            },

            // lihatMotor(id) {
            // this.$router.push({
            //     name: 'DetailMotor',
            //     params: {id}
            //         })
            //     },

            handlingDelete(id){
                if(confirm('apakah data ini ingin dihapus?')){
                    axios.delete('/api/motor/delete/'+id).then((response)=>{     
                        if(response.data.status){
                        this.$noty.success("Data Terhapus")
                        this.$router.push({
                        name: 'motor',
                        })
                    }

                })

                }else{
                    return false
                }

            },
        }

    }

        

</script>