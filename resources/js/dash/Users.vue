<template>
  <div id="dash">
    <main class="is-flex">
      <Aside></Aside>
      <section id="view">
        <div class="top-view is-flex is-align-items-center is-justify-content-center">
          <h1 class="has-text-centered has-text-white">Users</h1>
           <div class="right-content">
            <router-link :to="{name: 'Register'}">Cadastrar Usuario</router-link>
            <div>
              <input type="text" name="name" id="name" v-model="search" @keydown="find()">
            </div>
          </div>
        </div>
        <div class="users-table is-flex is-justify-content-center">
          <table>
            <tr>
              <th>Codigo</th>
              <th>Nome</th> 
              <th>Email</th>  
              <th>CPF</th>  
              <th>Contato</th>
              <th>Ações</th>              
            </tr>
            <tr v-for="(user, index) in users" :key="index">
              <td>{{user.id}}</td>
              <td>{{user.name}}</td>
              <td>{{user.email}}</td>
              <td>{{user.cpf}}</td>
              <td>{{user.contact}}</td>
              <td>
                <a @click="changeUser(user.id)">[Editar]</a>
                <a @click="deleteUser(user.id)">[Excluir]</a>
              </td>
            </tr>
          </table>
        </div>
      </section>
    </main>
  </div>
</template>

<script>
import axios from 'axios';
import Aside from './Aside.vue'
export default {
  name: 'Users',
  components: {Aside},
  data(){
    return{
      users: null,
      search: null
    }
  },
  methods:{
    getUsers(){
      axios.get('/api/users')
      .then(response =>{
        this.users = response.data.list;
        
      })
    },
    deleteUser(id){
      let result = confirm('Realmente deseja remover o usuario?');
      if(result){
        axios.delete(`/api/user/${id}`)
        this.getUsers();
      }
    },
    changeUser(id){
      this.$router.push({path: `/update_user/${id}`})
    },
    find(){
      if(this.search != null){
        axios.get(`/api/search/${this.search}`)
        .then(response=>{
          this.users = response.data.user;
        })
        .catch(error=>{
          this.users = null
        })
      }
    }
    
  },
  mounted(){
    this.getUsers();
  } 
}
</script>

<style scoped>
* {
  padding: 0px;
  margin: 0px;
  box-sizing: border-box;
}
body,
main {
  width: 100%;
  min-height: 100vh;
}

section#view {
  flex: 1;
  background-color: rgb(184, 179, 179);
}
.top-view{
  height: 80px;
  width: 100%;
  background: rgb(134, 133, 133);
  box-shadow: 11px 9px 15px 4px #000000;
  position: relative;
  z-index: 2;
}
.top-view .right-content{
  position: absolute;
  top:0;
  right: 0;
}
.users-table{
  width: 100%;
  padding: 20px;
}
.users-table table{
  width: 100%;
  border: 1px solid #000;
  max-height: 600px;
  overflow-y: auto;
  
}
.users-table tr,
.users-table th,
.users-table td{
  border: 1px solid #000;
  max-height: 30px;
  height: 100%;
  text-align: center;
}

</style>