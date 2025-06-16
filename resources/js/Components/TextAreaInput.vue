<script setup>

import { onMounted, ref, computed } from 'vue';

const props = defineProps({
  use_style: {
     type: String,
     required: false,
     default: "v1"
  }
})

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });


const textAreaCss = computed(() => {
   let css = `border-red-500 
                      rounded-md 
                      shadow-sm
                      focus:!border-main-color-i
                      focus:!ring-main-color-i`;
   if(props.use_style == "v2")
   {  
      css = `bg-white/[0.1] 
             rounded-md 
             border-solid 
             border-[1px]
             border-white
             placeholder-white
             text-white
             focus:!border-red-500
             focus:!ring-red-500`;
   } // end of if
   else if(props.use_style == "v3")
   {
      return `rounded-md 
              !bg-[#f9fafc] 
              !border-[#DBE5ED]
              focus:!border-red-500
              focus:!ring-red-500`;
   } 

   return css;

})

</script>

<template>
  <textarea
    ref="input"
    v-model="model"
    :class="textAreaCss"
  />
</template>
