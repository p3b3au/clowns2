<template>
     <header class='mymenu'>
        <nav>
          <ul class='mymenu'>
             <li v-for="(menu,idx) in menuLinks" :key="idx"> 
               <router-link :to="{name:menu.routeName}">{{menu.label}}</router-link>
             </li>      
          </ul>
    </nav> 
      
   </header>  
    
     
</template>

<script>
export default{
     name:'HeaderView',
     data:()=>({
      menuLinks:[
        {
          routeName:'home',
          label:'Accueil'
        },         
        {
          routeName:'ClownList',
          label:"Clowns"
        },                 
      ]
    })
}

</script>

<style>

</style>