<template>
    <div class="card">
        <div class="card-header">

        </div>

        <div class="card-body" >
            <!-- <h2>Judul Buku</h2>
            <p>Deskripsi</p> -->
          {{kelas.id}} <br>
          {{kelas.kelas}}
        
          
        </div>
        <router-link to="/" class=" btn btn-primary float-right ">Kembali</router-link>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      kelas: [],
      errors: []
    }
  },

  // Fetches kelas when the component is created.
  created() {
    let id=this.$route.params.id;
    axios.get('/kelas/'+id)
    .then(response => {
      // JSON responses are automatically parsed.
      this.kelas = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })

  }
  
}
</script>