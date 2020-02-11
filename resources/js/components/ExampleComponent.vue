<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test API</div>

                    <div 

                        v-if="loading ===false"
                        class="card-body">
                        Contoh hasil Pemanggilan Endpoint API

                        <table class="table">
                            <head class="tabl-striped">
                                <th>Nama</th>
                                <th>Jk</th>
                                <th>Dibuat Pada</th>
                            </head>
                            <tbody>
                                <tr  v-for="item in data " key="item.id">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                        <p>Response:</p>
                        {{ data }}
                        {{ error }}
                    </div>
                    <div v-else>
                        Loading..
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Progress-bar vue -->
        <vue-progress-bar></vue-progress-bar>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                data:[],
                error:null,
                loading:false
            }
        },
        mounted() {//untuk memastikan function yang akan diekses
            //ekusi telah didownload
            //function bawaan
            this.getData()// untuk mengakses web service
        },
        methods: {
            getData(){
                this.loading =true
                this.$Progress.start()
                axios.get('/testapi')//1
                .then((res)=> {//2
                    // 
                    this.data=res.data.data
                      this.loading =false
                      this.$Progress.finish()

                })
                .catch((error)=> {//3
                    // 

                    this.error=error.message
                      this.loading =false
                      this.$Progress.fail()
                })

            }
        }
    }
</script>