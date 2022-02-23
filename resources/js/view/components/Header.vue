<template>
   <header class="is-flex is-flex-direction-column is-justify-content-center">
    <div class="top-bar is-flex is-justify-content-space-between has-background-black ">
      <div class="container is-flex is-justify-content-space-between has-text-white">
        <p class="has-text-weight-bold">AD</p>
        <div class="sign has-text-weight-semibold">
          <router-link :to="{name: 'Register'}">Register</router-link> 
            <span> | </span>
          <router-link :to="{name: 'Login'}">Login</router-link>
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
export default {

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
</style>