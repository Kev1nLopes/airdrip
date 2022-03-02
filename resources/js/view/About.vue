<template>
  <div id="about">
    <Header></Header>
    <main>
      <section class="about is-flex is-flex-direction-column container is-justify-content-center is-align-items-center">
        <h1 class="is-size-1">About</h1>
        <p>AirDrip is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
.about p{
  max-width: 600px;
  text-align: center;
}
</style>

