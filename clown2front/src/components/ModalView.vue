<template>

    <transition name="modal" class="modal-overlay">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">

                        <h1> {{clownPseudo}}
                        </h1>
                    </div>

                    <div class="modal-body">
                        <slot name="body">
                            {{buddy.pseudo}}
                        </slot>
                    </div>

                    <div class="modal-footer">
                        <slot name="footer">
                            TODO trouver le buddy
                            <button class="modal-default-button" @click="$emit('close')">
                                OK
                            </button>
                        </slot>
                    </div>
                </div>
            </div>
        </div>
    </transition>



</template>
<script>
import axios from 'axios'
const FIND_BUDDY_API_URL = "http://localhost:8787/api/findBuddy.php"

export default {
    name: "ModalView",
    props:{
      clownId:{
          type:String,
      },
      clownPseudo :{
          type:String,
      }
    },
    data: () =>({
buddy:[],
}),
   async created() {
        let id = this.clownId
        const buddydb = await axios.post(FIND_BUDDY_API_URL,id)
        this.buddy = buddydb.data
        console.log(this.buddy)
       },
 }
  
</script>

<style>
@import "@/assets/static/css/modal-style.css";
</style>

  