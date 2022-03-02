<template>
  <div id="home">
    <Header></Header>
    <main>
      <section class="home is-flex container is-justify-content-center is-align-items-center mx-auto">
        <div class="grid-columns container">
          <div v-for="(product, index) in products" :key="index" class="card is-flex is-flex-direction-column is-align-items-center">
            <h1 class="mt-3 is-size-3 has-text-weight-medium">{{product.name_product}}</h1>
            <div class="fake-img mt-2">
              <img src="" alt="Tenis imagem">
            </div>
            <h3 class="mt-5 is-size-4">R$ {{product.price}}</h3>
            <div class="">Marca: {{product.provider}}</div>
            <div class="">{{product.model}} | {{product.sex}}</div>
          </div>
        </div>
      </section>
    </main>
    <Footer></Footer>
  </div>
</template>

<script>
import axios from 'axios';
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';
export default {
    name:'About',
    components:{
        Header,
        Footer
    },
    data(){
        return{
            products: null
        }
    },
    methods:{
        getProducts(){
            axios.get('/api/products')
            .then(response=>{
                this.products = response.data.list;
            })
        },
        
    },
    created(){
        this.getProducts();
    }
    
}
</script>

<style scoped>
    .home{
        height: inherit;
    }
    .grid-columns{
        display: grid;
        grid-template-columns: repeat( auto-fill, minmax(250px, 1fr) );
        gap: 50px;
        place-items: center;
    }
    .card{
        height: 300px;
        background-color: #ccc;
        border-radius: 3px;
        transition: .3s;

    }
    .card:hover{
       transform: scale(1.1);
        
    }
    .fake-img{
        width: 50%;
        height: 120px;
        background: black;
        box-shadow: 5px 5px 15px 5px #000000; 
        transition: .3s;
    }
      .fake-img:hover{
        transform: scale(1.1);
    }
</style>
