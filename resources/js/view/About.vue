<template>
  <div id="about">
    <Header></Header>
    <main>
      <section class="about is-flex container is-justify-content-center is-align-items-center">
        About
      </section>
    </main>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
export default {
  name: "About",
  data() {
    return {};
  },
  components: {
    Header,
    Footer,
  },
};
</script>

<style scoped>
.about {
  height: inherit;
}
</style>

