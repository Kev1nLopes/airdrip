<template>
  <footer class="is-flex is-align-items-center is-justify-content-space-evenly has-text-centered">
    <div class="is-flex is-flex-direction-column">
      <h3>AirDrip</h3>
      <p>Todos direitos reservados... <br> menos o seu</p>
    </div>
    <ul class="footer-infos">
      <li><router-link :to="{name: 'Feedbacks'}">Feedback</router-link> </li>
    </ul>

  </footer> 
</template>

<script>
export default {

}
</script>

<style>
  footer{
    height: 80px;
    width: 100%;
    box-shadow: 0px -10px 10px 0px #686767;
    position: absolute;
    bottom: -80px;
    background: black;
  }
</style>