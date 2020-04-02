<template>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        Tambah Buku
                </div>
               
                <div class="card-body">
                    <form v-on:submit="submitPostEdit()">
                        <div class="form-group">
                            <input type="text" v-model="kelas.kelas" placeholder="Masukan Nama Buku" class="form-control">
                        </div>
                         <div class="form-group">
                             <router-link to="/" class=" btn btn-primary float-right ">Kembali</router-link>
                          <button class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
          
        </div>
       
    </div>
    </div>
</template>


<script>
import axios from 'axios';

export default {
  data: function() {
    return {
      kelas:{
          kelas:""
      },
      errors: []
    }
  },
  created() {
    let id=this.$route.params.id;
    axios.get('/kelas/'+id+'/edit')
    .then(response => {
      // JSON responses are automatically parsed.
      this.kelas = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })

  },





  methods: {
      submitPostEdit(){
          let id=this.$route.params.id;
    axios.put('/kelas/'+id,this.kelas)
    .then(response => {
      console.log(response);
      this.$router.push({path:'/'})
      this.kelas = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
      }
   
  }
}
</script>