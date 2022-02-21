<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AirDrip</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <div id="app">
    <header class="is-flex is-flex-direction-column is-justify-content-center">
        <div class="top-bar is-flex is-justify-content-space-between has-background-black ">
          <div class="container is-flex is-justify-content-space-between has-text-white">
            <p class="has-text-weight-bold">AD</p>
            <div class="sign has-text-weight-semibold">
              <router-link :to="{ name: 'Login' }">Register</router-link>
                <span> | </span>
              <router-link :to="{ name: 'Login' }">Login</router-link>
            </div>
          </div>
        </div>
        <div class="container is-flex is-align-items-center is-justify-content-space-between" id="header-main">
          <div class="logo">
            <h3>AirDrip</h3>
          </div>
          <nav class="is-flex is-justify-content-space-between">
            <router-link :to="{ name: 'Home' }">Home</router-link>
            <router-link :to="{ name: 'Home' }">Man</router-link>
            <router-link :to="{ name: 'Home' }">Women</router-link>
            <router-link :to="{ name: 'Kids' }">Kids</router-link>
            <router-link :to="{ name: 'About' }">About</router-link>
          </nav>
          <div class="search">
            <input type="text" name="" id=""/>
            <a href=""><font-awesome-icon icon="fa-solid fa-heart" /></a>
            <a href=""><font-awesome-icon icon="fa-solid fa-cart-plus" /></a>
          </div>
        </div>
    </header>
    <main>
      <router-view></router-view>
    </main>
      <footer class="is-flex is-align-items-center is-flex-direction-column has-text-centered">
        <h3>AirDrip</h3>
        <p>Todos direitos reservados... <br> menos o seu</p>
      </footer>
  </div>    
<script src="/js/app.js"></script>
</body>
</html>