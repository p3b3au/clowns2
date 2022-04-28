<template>

    <transition name="modal" class="modal-overlay">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">

                        <h1> {{clownId}}
                        </h1>
                    </div>

                    <div class="modal-body">
                        <slot name="body">
                            default body
                        </slot>
                    </div>

                    <div class="modal-footer">
                        <slot name="footer">
                            default footer
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
export default {
    name: "ModalView",
    props:{
      clownId:{
          type:String,
      }
    },
    data: () =>({

}),

}
  
</script>

<style>
@import "@/assets/static/css/modal-style.css";
</style>

  