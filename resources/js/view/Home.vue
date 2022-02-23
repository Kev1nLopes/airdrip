<template>
    <div id="home">
        <Header></Header>
        <main>
            <section class="home is-flex container is-justify-content-center is-align-items-center">
            Home
            </section>
        </main>
        <Footer></Footer>
    </div>
</template>

<script>
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';
export default {
    name:'About',
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

<style scoped>
    .home{
        height: inherit;
    }
</style>
