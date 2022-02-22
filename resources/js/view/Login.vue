<template>
  <section id="login">
    <div id="content" class="has-text-centered is-flex is-justify-content-center is-align-items-center">
      <form v-if="sign == 'login'" method="POST" action="/login" id="form-login" class="is-flex is-flex-direction-column has-text-left ">
        <h3>AirDrip</h3>
        <p class="has-text-centered">Conforto até no pisar</p>
        <div v-if="warning" class="warning">{{warning}}</div>
        <input type="hidden" name="_token" :value="csrf_token">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" autocomplete="off" placeholder="Informe seu e-mail"  />
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Informe sua senha"  />
        <input type="submit" value="Entrar" >
          <span @click="changeSign('register')">Register</span>
      </form>
      <form v-if="sign == 'register'" method="POST" action="/register" id="form-register" class="is-flex is-flex-direction-column has-text-left ">
        <h3>AirDrip</h3>
        <p class="has-text-centered">Conforto até no pisar</p>
        <div v-if="warning" class="warning">{{warning}}</div>
        <input type="hidden" name="_token" :value="csrf_token">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Informe seu nome">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" autocomplete="off" placeholder="Informe seu e-mail"  />
        <label for="contact">Contato</label>
        <input type="text" name="contact" id="contact" placeholder="(xx) xxxx-xxxx">
        <label for="date_birth">Data de Nascimento</label>
        <input type="date" name="date_birth" id="date_birth">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" placeholder="Informe sua senha"/>
        <label for="password_confirmation">Confirme a senha:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Informe sua senha novamente"/>
        <input type="submit" value="Cadastrar" >
        <span @click="changeSign('login')">Login</span>
      </form>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Login',
  props: ['csrf_token', 'sign', 'warning'],
  data(){
    return{
      login: true,
    }
  },
  methods:{
   changeSign(value){
     this.sign = value;
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
