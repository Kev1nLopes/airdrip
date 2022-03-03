<template>
 <section id="login">
    <div id="content" class="has-text-centered is-flex is-justify-content-center is-align-items-center">
      <div  id="form-register" class="is-flex is-flex-direction-column has-text-left ">
        <h3>AirDrip</h3>
        <p class="has-text-centered">Enviar feeback</p>
        <input type="hidden" name="_token" :value="csrf_token">

        <label for="reason">Motivo:</label>
        <input type="text" name="reason" id="reason" autocomplete="off" placeholder="Informe o motivo" v-model="feedback.reason">

        <label for="text">Texto:</label>
        <textarea name="text" id="text" cols="30" rows="10" placeholder="Feedback" style="resize: none; overflow-y: scroll;" v-model="feedback.text"></textarea>
        
        <input type="submit" value="Enviar" @click="sendFeedback()">
        <div class="is-flex is-justify-content-space-around">
          <router-link class="has-text-centered" :to="{name: 'Products'}">Retornar</router-link>
        </div>
      </div>
    </div>
 </section>
</template>

<script>
import axios from 'axios';
import { mapState } from 'vuex';
export default {
    name: 'RegisterProduct',
    data(){
        return{
            csrf_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            feedback: {
                reason: null,
                text: null,
                user: user.name
               
            }
        }
    },
    methods:{
        sendFeedback(){
            axios.post('api/createFeedback', this.feedback)
            .then(response=>{

            })
            .catch(error=>{
                
            })
        }
    },
    computed:{
       ...mapState(["user"])
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
   height: 400px;
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