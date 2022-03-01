<template>
  <aside class="is-flex is-flex-direction-column is-justify-content-flex-start is-align-items-center has-background-grey-light">
    <div id="icon-user" class="is-flex is-align-items-center is-justify-content-center is-justify-self-flex-start">
      <img src="" alt="user" srcset="" />
    </div>
    <p>Nome: Jorginho</p>
    <nav id="aside-nav" class="is-flex is-flex-direction-column">
      <router-link :to="{ name: 'Users' }">Users</router-link>
      <router-link :to="{ name: 'Products' }">Produtos</router-link>
      <router-link :to="{ name: 'Sales' }">Vendas</router-link>
      <router-link :to="{ name: 'Profit' }">Entrada</router-link>
      <router-link :to="{ name: 'Feedbacks' }">Feedbacks</router-link>
      <router-link :to="{ name: 'Updates' }">Atualizações</router-link>
    </nav>
    <router-link class="mt-4" :to="{ name: 'Home' }">Retornar</router-link>
  </aside>
</template>

<script>
export default {

}
</script>

<style scoped>
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
</style>