<template>

    <transition name="modal" class="modal-overlay">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">
                        <slot name="header">
                            default header
                        </slot>
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
<script
src="https://unpkg.com/vue@2">

export default {
    name: 'ModalView',
    data: () => {
         
        },
    props:{
      
    }    
}

</script>

<style>
@import "@/assets/static/css/modal-style.css";
</style>

    <!-- <script src="https://unpkg.com/vue@2"></script> -->
   
    <!-- template for the modal component -->
    <script type="text/x-template" id="modal-template">