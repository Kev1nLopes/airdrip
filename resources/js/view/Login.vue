<template>
  <section id="login">
    <div id="content" class="has-text-centered is-flex is-justify-content-center is-align-items-center">
      <div id="form-login" class="is-flex is-flex-direction-column has-text-left ">
        <h3>AirDrip</h3>
        <p class="has-text-centered">Conforto até no pisar</p>
        <input type="hidden" name="_token" :value="csrf_token">

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" autocomplete="off" placeholder="Informe seu e-mail" v-model="data.email"  />

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Informe sua senha" v-model="data.password"  />
        
        <input type="submit" value="Entrar" @click="submit()">
        <div class="is-flex is-justify-content-space-around">
          <router-link class="has-text-" :to="{name: 'Register'}">Register</router-link>
          <router-link class="has-text-centered" :to="{name: 'Home'}">Retornar</router-link>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios';
export default {
  name: 'Login',
  data(){
    return{
     csrf_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
     data: {
       email: null,
       password: null
     }
    }
  },
  methods:{
    submit(){
      axios.post('/login', this.data)
      .then(response=>{
        this.$router.push({ name: 'Produtos' });
      })
      .catch((error)=>{
        console.log("deu erro");
      })
      
    }
  }
}
</script>

<style scoped>
 #login{
   width: 100%;
   background: #797979;
   height: 100vh;
 }
 .warning{
   color: red;
   text-align: center;
 }
 #content{
   height: inherit;
   width: inherit;
 }
 #form-login{
   height: 360px;
   background: rgb(43, 43, 43);
   max-width: 350px;
   width: 100%;
   padding: 20px;
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
