<template>
  <section id="login" class="is-flex container is-justify-content-center is-align-items-center ">
    <div class="content has-text-centered is-flex is-flex-direction-column is-justify-content-space-evenly">
      <h3>AirDrip</h3>
      <form method="POST" class="is-flex is-flex-direction-column has-text-left ">
      <input type="hidden" name="_token" :value="csrf_token">
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" autocomplete="off" placeholder="Informe seu e-mail" v-model="form.email" />
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="Informe sua senha" v-model="form.password" />
      <input type="submit" value="Entrar" >
    </form>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Login',
  props: ['csrf_token'],
  data(){
    return{
      form:{
        email: '',
        password: ''
      }
    }
  },
  methods:{
   
    }
}
</script>

<style scoped>
 #login{
   width: 100%;
 }
 .content{
   max-width: 350px;
   height: 300px;
   background: rgb(43, 43, 43);
   width: 100%;
   padding: 30px;
   color: white;
   border-radius: 5px;
   box-shadow: 5px 5px 15px 5px #000000;
 }
 h3{
   color: white;
 }
 form{
   gap: 5px;
 }
 input{
   height: 30px;
   outline: none;
 }
 input[type="submit"]{
   margin-top: 30px;
   background: #fff;
   border-radius: 5px;
 }
</style>
