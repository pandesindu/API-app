<template>
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Data motor {{detailmotor.nama_motor}}</li>
            <li class="list-group-item">plat nomor : {{detailmotor.plat_nomor}}</li>
            <li class="list-group-item">nama motor :{{detailmotor.nama_motor}}</li>
            <li class="list-group-item">merk :{{detailmotor.merk}}</li>
            <li class="list-group-item">warna : {{detailmotor.warna}}</li>
            <li class="list-group-item">nomor mesin : {{detailmotor.no_mesin}}</li>
            <li class="list-group-item">nomor rangka : {{detailmotor.no_rangka}}</li>
             <li class="list-group-item">modal : {{detailmotor.modal}}</li>
            <li class="list-group-item">status : {{detailmotor.status}}</li>
             <li class="list-group-item">gambar :{{detailmotor.gambar}}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                detailmotor: {}
            };
        },

        mounted() {
            this.getMotor()
        },

        methods : {
            //dont touch this method bitch!!!!!
            getMotor(){
                axios.get('/api/motor/' +this.$route.params.id).then((response)=> {
                console.log(response)
                this.detailmotor=response.data
                }) 
            }
        },
    }
</script>