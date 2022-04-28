<template>
  <div id="app">    
      <HeaderView/>
    <main>
      <router-view/>

    </main>
     <!-- <AppMenu/> -->
     
    <FooterView/>
  </div>
</template>

<script>
import HeaderView from '@/components/HeaderView.vue'
import FooterView from '@/components/FooterView.vue'

export default{
    name:'App',
    components:{
        HeaderView,
        FooterView
    }
}
</script>

<style>
@import "./assets/static/css/grid-base.css";
@import "./assets/static/css/home.css";
</style>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
