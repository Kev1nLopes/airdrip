<template>
  <div id="app">
        <router-view></router-view>
  </div>
</template>

<script>
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';
export default {
    name: 'App',
    data(){
        return{

        }
    },
    components:{
        Header,
        Footer
    }
}
</script>

<style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }
  a, a:visited{
    color: white;
  }
  a:hover{
    color: #ccc;
  }
  #app{
    height: 100vh;
    width: 100%;
  }
  main{
  height: calc(100vh - 80px);
  position: relative;
  }
  
</style>