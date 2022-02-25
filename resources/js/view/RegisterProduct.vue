<template>
 <section id="login">
    <div id="content" class="has-text-centered is-flex is-justify-content-center is-align-items-center">
     <div  id="form-register" class="is-flex is-flex-direction-column has-text-left ">
        <h3>AirDrip</h3>
        <p class="has-text-centered">Regitrar Produto</p>
        <input type="hidden" name="_token" :value="csrf_token">

        <label for="name_product">Nome:</label>
        <input type="text" name="name_product" id="name_product" autocomplete="off" placeholder="Informe o nome do produto" v-model="product.name_product">

        <label for="provider">Fornecedor:</label>
        <input type="text" name="provider" id="provider" autocomplete="off" placeholder="Informe o fornecedor" v-model="product.provider"  />
        
        <label for="model">Modelo:</label>
        <input type="text" name="model" id="model" placeholder="Informe o fornecedor" v-model="product.model">

        <label for="price">Valor:</label>
        <input type="number" name="price" id="price" step="0.01" v-model="product.price">

        <label for="photo">Foto</label>
        <input type="file" name="photo" id="photo" @change="fileChange">

        <label for="sex">Sexo:</label>
        <select name="sex" v-model="product.sex">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="outro" selected>Outro</option>
        </select>

        <input type="submit" value="Cadastrar" @click="registerProduct()">
        <div class="is-flex is-justify-content-space-around">
          <router-link class="has-text-centered" :to="{name: 'Produtos'}">Retornar</router-link>
        </div>
     </div>
    </div>
 </section>
</template>

<script>
import axios from 'axios';
export default {
    name: 'RegisterProduct',
    data(){
        return{
            csrf_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            product: {
                name_product: null,
                provider: null,
                model: null,
                price: null,
                sex: null,
                photo: null,
            }
        }
    },
    methods:{
        registerProduct(){
            axios.post('/api/product', this.product)
            .then(response=>{
              console.log(response);
            })
            .catch(error=>{
              console.log(error);
            })
        },
        fileChange(e){
          let files = e.target.files || e.dataTransfer.files;
          if(!files.lenght){ return;}
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