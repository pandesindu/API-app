<template>
    <div>
        <h1>Edit Data Motor</h1>
        <form @submit.prevent="handleUpdate" action="/motor/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pwd">Plat nomor:</label>
            <input type="text" class="form-control" placeholder="" id="" v-model="form.plat_nomor">
            <div class="error" v-if="errors.plat_nomor">{{errors.plat_nomor[0]}}</div>
        </div>

        <div class="form-group">
            <label for="pwd">Nama Motor:</label>
            <input type="text" class="form-control" placeholder="" id="" v-model="form.nama_motor">
            <div class="error" v-if="errors.nama_motor">{{errors.nama_motor[0]}}</div>
        </div>

        <div class="form-group">
            <label for="pwd">merk:</label>
            <input type="text" class="form-control" placeholder="" id="" v-model="form.merk">
            <div class="error" v-if="errors.merk">{{errors.merk[0]}}</div>
        </div>

        <div class="form-group">
            <label for="pwd">warna:</label>
            <input type="text" class="form-control" placeholder="" id="" v-model="form.warna">
            <div class="error" v-if="errors.warna">{{errors.warna[0]}}</div>
        </div>

        <div class="form-group">
            <label for="pwd">no rangka:</label>
            <input type="text" class="form-control" placeholder="" id="" v-model="form.no_rangka">
            <div class="error" v-if="errors.no_rangka">{{errors.no_rangka[0]}}</div>
        </div>

        <div class="form-group">
            <label for="pwd">no mesin:</label>
            <input type="text" class="form-control" placeholder="" id="" v-model="form.no_mesin">
            <div class="error" v-if="errors.no_mesin">{{errors.no_mesin[0]}}</div>
        </div>

        <div class="form-group">
            <label for="pwd">status:</label>
            <input type="text" class="form-control" placeholder="" id="" v-model="form.status">
            <div class="error" v-if="errors.status">{{errors.status[0]}}</div>
        </div>

        <div class="form-group">
            <label for="pwd">modal:</label>
            <input type="number" class="form-control" placeholder="" id="" v-model="form.modal">
            <div class="error" v-if="errors.modal">{{errors.modal[0]}}</div>
        </div>

        <div class="form-group">
            <label for="pwd">gambar:</label>
            <input type="text" class="form-control" placeholder="" id="" v-model="form.gambar">
            <div class="error" v-if="errors.gambar">{{errors.gambar[0]}}</div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</template>

<script>

export default {
        data(){
            return {
                form : {
                    plat_nomor: '',
                    nama_motor: '',
                    merk: '',
                    warna:'',
                    no_rangka:'',
                    no_mesin:'',
                    status:'',
                    modal:'',
                    gambar:'',
                }, 
                errors : {}
            }
        },

    methods: {
        handleUpdate(id){
            console.log(this.form)
            axios.put('/api/motor/update/'+this.$route.params.id, this.form).then((response)=>{
               if(response.data.status){
                console.log(response)
                this.$noty.success("Data Diperbaharui")
                    this.$router.push({
                    name: 'motor',
                        })
               }
            }).catch((error) =>{
                if(error.response.status == 422) {
                this.errors = error.response.data
                }



            })          

        }, 
            getMotor(){
                axios.get('/api/motor/' +this.$route.params.id).then((response)=> {
                    this.form= {
                        plat_nomor : response.data.plat_nomor,
                        nama_motor : response.data.nama_motor,
                        merk : response.data.merk,
                        warna: response.data.warna,
                        no_rangka : response.data.no_rangka,
                        no_mesin : response.data.no_mesin,
                        status : response.data.status,
                        modal : response.data.modal,
                        gambar : response.data.gambar,
                    }
                }) 
            }
    },

    mounted() {
    this.getMotor()
    },
}
</script>
