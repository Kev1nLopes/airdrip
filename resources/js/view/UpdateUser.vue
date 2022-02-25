<template>
 <section id="login">
    <div id="content" class="has-text-centered is-flex is-justify-content-center is-align-items-center">
     <div id="form-register" class="is-flex is-flex-direction-column has-text-left ">
        <h3>AirDrip</h3>
        <p class="has-text-centered">Conforto até no pisar</p>
        <input type="hidden" name="_token" :value="csrf_token">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Informe seu nome" v-model="user.name" >
       
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" autocomplete="off" placeholder="Informe seu e-mail" v-model="user.email"  />

        <label for="contact">Contato</label>
        <input type="text" name="contact" id="contact" placeholder="(xx) xxxx-xxxx" v-model="user.contact">
        
       
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" v-model="user.cpf">
     

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" placeholder="Informe sua senha" v-model="user.password"/>
        
        <label for="password_confirmation">Confirme a senha:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Informe sua senha novamente" v-model="user.password_confirmation"/>

        <input type="submit" value="Cadastrar" @click="submit()" >
        <div class="is-flex is-justify-content-space-around">
          <router-link class="has-text-" :to="{name: 'Login'}">Login</router-link>
          <router-link class="has-text-centered" :to="{name: 'Home'}">Retornar</router-link>
        </div>
     </div>
    </div>
 </section>
</template>

<script>
import axios from 'axios';
export default {
    name: 'Register',
    data(){
        return{
            csrf_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            user: {},
            param: this.$route.params.id,
          
        }
    },
    methods:{
      getData(){
        axios.get(`/api/user/${this.param}`)
          .then((response) => {
            this.user = {...response.data.user, password: '', password_confirmation: ''};
            console.log(this.user)
          })
          .catch((error) => {
            console.log(error.response.data.error)
           })
      },
      submit(){
        axios.put(`/api/user/${this.param}`, this.user)
        .then(response=>{
          this.$router.push({path: '/dashboard/users'})
        })
        .catch(error=>{
          console.log(error)
        })
      }
    },
    created(){
      this.getData();
    }
}
</script>

<style scoped>
#login{
   width: 100%;
   background: #797979;
   height: 100vh;
 }
 #content{
   height: inherit;
   width: inherit;
 }

 #form-register{
   max-width: 350px;
   width: 100%;
   height: 580px;
   padding: 20px;
   background: rgb(43, 43, 43);
   color: white;
   border-radius: 5px;
   box-shadow: 5px 5px 15px 5px #000000;
 }
 h3{
   color: white;
   font-size: 32px;
   text-align: center;
 }
 form{
   gap: 5px;
 }
 input{
   height: 30px;
   outline: none;
 }
 input[type="submit"]{
   margin-top: 20px;
   padding: 5px;
   display: flex;
   align-items: center;
   justify-content: center;
   background: rgb(2,0,36);
   background: linear-gradient(302deg, rgba(2,0,36,1) 1%, rgba(9,121,35,1) 28%); 
   border: none;
   border-radius: 5px;
   transition: .3s;
 }
 input[type="submit"]:hover{
   transform: scale(1.08);
   color: white;
 }
 span:hover{
   cursor: pointer;
 }
</style>