<template>
    <div id="dash">
    <main class="is-flex">
      <aside class="is-flex is-flex-direction-column is-justify-content-flex-start is-align-items-center has-background-grey-light">
        <div id="icon-user" class="is-flex is-align-items-center is-justify-content-center is-justify-self-flex-start">
          <img src="" alt="user" srcset="" />
        </div>
        <p>Nome: Jorginho</p>
        <nav id="aside-nav" class="is-flex is-flex-direction-column">
          <router-link :to="{ name: 'Users' }">Users</router-link>
          <router-link :to="{ name: 'Produtos' }">Produtos</router-link>
          <router-link :to="{ name: 'Vendas' }">Vendas</router-link>
          <router-link :to="{ name: 'Entrada' }">Entrada</router-link>
          <router-link :to="{ name: 'Feedbacks' }">Feedbacks</router-link>
          <router-link :to="{ name: 'Updates' }">Atualizações</router-link>
        </nav>
        <router-link class="mt-4" :to="{ name: 'Home' }">Retornar</router-link>
      </aside>
      <section id="view">
        <div class="top-view is-flex is-align-items-center is-justify-content-center">
          <h1 class="has-text-centered has-text-white">Produtos</h1>
           <div class="right-content">
            <router-link :to="{name: 'RegisterProduct'}">Cadastrar Produto</router-link>
            <form method="POST">
              <input type="text" name="product_name" id="product_name">
            </form>
          </div>
        </div>
        <div class="products-table is-flex is-justify-content-center">
          <table>
            <tr>
              <th>Codigo</th>
              <th>Produto</th> 
              <th>Modelo</th>  
              <th>Fornecedor</th>  
              <th>Preço</th> 
              <th>Sexo</th>          
              <th>Ações</th>          
            </tr>
            <tr v-for="(produto, index) in produtos" :key="index">
              <td>{{produto.id}}</td>
              <td>{{produto.name_product}}</td>
              <td>{{produto.model}}</td>
              <td>{{produto.provider}}</td>
              <td>{{produto.price}}</td>
              <td>{{produto.sex}}</td>
              <td>
                <a @click="changeProduct($produto.id)">[Editar]</a>
                <a @click="deleteProduct($produto.id)">[Excluir]</a>
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
export default {
  name: 'Produtos',
  data(){
    return{
      produtos: null,
    }
  },
  methods:{
      getProducts(){
      axios.get('/api/products')
      .then(response =>{
        this.produtos = response.data.list;
      })
    },
    deleteProduct($id){
      axios.delete(`/product/${$id}`)
      .then(()=>{
        alert('Produto removido!');
      })
      
    }
  },
  mounted(){
    this.getProducts();
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

aside {
  max-width: 300px;
  width: 100%;
  height: 100vh;
  z-index: 1;
   box-shadow: 11px 9px 15px 4px #000000;
  
}

#icon-user {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-color: black;
  justify-self: center;
  margin-top: 30px;
}
#aside-nav {
  width: 100%;
  height: 300px;
  margin-top: 30px;
  
}

#aside-nav a {
  height: inherit;
  width: inherit;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 1px solid rgb(134, 133, 133);
}
#aside-nav a:hover {
  background-color: rgb(134, 133, 133);
  cursor: pointer;
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
.products-table{
  width: 100%;
  padding: 20px;
}
.products-table table{
  width: 100%;
  border: 1px solid #000;
  max-height: 600px;
  overflow-y: auto;
  
}
.products-table tr,
.products-table th,
.products-table td{
  border: 1px solid #000;
  max-height: 30px;
  height: 100%;
  text-align: center;
}
</style>