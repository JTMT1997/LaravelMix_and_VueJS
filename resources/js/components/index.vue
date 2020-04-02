<template>
    <div class="card">
        <div class="card-header">
            <router-link to="/create" class=" btn btn-primary float-right ">Tambah Kelas</router-link>
        </div>
        <div class="body">
            <table class="table table-hover" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kelas</th>
                      
                        <th width="100" >Action</th>
                        <th width="100"></th>
                        <th width="100"></th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="post of kelas"> 
                        <td>{{post.id}}</td>
                        <td>{{post.kelas}}</td>
                        
                        <td>
                            <router-link :to="{name:'readPost',params:{id:post.id}}" class=" btn btn-info  ">Lihat</router-link>
                        </td>
                        <td>
                              <router-link :to="{name:'editPost',params:{id:post.id}}" class=" btn btn-success">Edit</router-link>
                        </td>
                        <td>
                            <button type="submit" v-on:click="submitPostDelete(post.id,index)"   class="btn btn-danger"  >Delete</button>
                        </td>
                       
                    </tr>
                </tbody>
            </table>
        </div>
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

  // Fetches posts when the component is created.
  created() {
    axios.get('/kelas')
    .then(response => {
      // JSON responses are automatically parsed.
      this.kelas = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })

  },
   methods: {
      submitPostDelete(id,index){
         if(confirm('Apakah Anda Ingin Menghapus Data Ini?')){
        axios.delete('/kelas/'+id)
        .then(response => {
          console.log(response);
          this.$router.push({path:'/'})
          this.kelas.splice(index, 1);
      })
    .catch(e => {
      this.errors.push(e)
         })
       }
       }
   }
   
  
}
</script>