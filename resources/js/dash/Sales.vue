<template>
  <div id="dash">
    <main class="is-flex">
      <Aside></Aside>
      <section id="view">
        <div class="top-view is-flex is-align-items-center is-justify-content-center">
          <h1 class="has-text-centered has-text-white">Vendas</h1>
        </div>
      </section>
    </main>
  </div>
</template>

<script>
import Aside from './Aside.vue'
export default {
  name: 'Vendas',
  components: {Aside}

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
.top-view a{
  position: absolute;
  top:0;
  right: 0;
}
</style>