<template>
  <header class="is-flex is-flex-direction-column is-justify-content-center">
    <div class="top-bar is-flex is-justify-content-space-between has-background-black ">
      <div class="container is-flex is-justify-content-space-between has-text-white">
        <p class="has-text-weight-bold">AD</p>
        <div class="sign has-text-weight-semibold" v-if="!loged">
          <router-link :to="{name: 'Register'}">Register</router-link> 
          <span> | </span>
          <router-link :to="{name: 'Login'}">Login</router-link>
        </div>
        <div class="sign has-text-weight-semibold" v-else>
          <ul class="is-flex user is-justify-content-space-around">
            <li>{{user.name}}</li>
            <li class="is-flex is-flex-direction-column is-justify-content-center">
              <font-awesome-icon icon="fa-solid fa-user-astronaut" />
              <ul class="sub-menu">
                <li><a  @click="logout()">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container is-flex is-align-items-center is-justify-content-space-between" id="header-main">
      <div class="logo">
        <h3>AirDrip</h3>
      </div>
      <nav class="is-flex is-justify-content-flex-end" style="gap: 30px;">
        <router-link :to="{ name: 'Home' }">Home</router-link>
        <router-link :to="{ name: 'About' }">About</router-link>
        <router-link v-if="loged" :to="{ name: 'Users' }">Dashboard</router-link>    
      </nav>
      <div class="search">
        <input type="text" name="" id=""/>
        <a href=""><font-awesome-icon icon="fa-solid fa-heart" /></a>
        <a href=""><font-awesome-icon icon="fa-solid fa-cart-plus" /></a>
      </div>
    </div>
  </header>
</template>

<script>
import axios from 'axios';
import {mapState} from 'vuex';
import Cookie from 'js-cookie';

export default {
  name: 'Home',
  data(){
    return{
     
    }
  },
  methods:{
    logout(){
      Cookie.remove('token');
      this.$store.commit('changeUser', null);
      this.$store.commit('login', false);
    }
   
  },
  created(){
    
  },
  computed:{
    ...mapState(["loged", "user"])
  }
}
</script>

<style>
 header{
    min-height: 80px;
    box-shadow: 0px 8px 10px 0px #000000;
  }
  #header-main{
    width: 100%;
    
  }
  #header-main a{
    color: black;
  }
  #header-main a:hover{
    color: #ccc;
  }
  #header-main nav{
    max-width: 200px;
    width: 100%;
  }
  ul.user{
    width: 80px;
    position: relative;
    
  }
  .sub-menu{
    width: inherit;
    display: none;
    transition: .5s;
  }
   ul.user:hover .sub-menu{
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    position: absolute;
    top: 20px;
    right: 0;
    left: 0;
    height: 30px;
    background: #ccc;
    z-index: 3;
    
  }
</style>