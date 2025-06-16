<script setup>

import { onMounted, ref, computed } from 'vue';


const props = defineProps({
    en_default_option: {
        type: Boolean,
        default: true,
        required: false
    },
    use_style: {
        type:   String,
        default: "v1",
        required: false
    }
})

// eslint-disable-next-line vue/require-prop-types
const model = defineModel({
    required: true,
});

const input = ref("");

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });

const cssStyle = computed(() => {
     if(props.use_style == "v2")
     {
          return `!border-red-500 
                  !placeholder-white 
                  focus:!border-white 
                  focus:!ring-white 
                  !rounded-md 
                  !shadow-sm 
                  !bg-transparent
                  !text-main-color-ii
                  focus:!border-main-color-i
                  focus:!ring-main-color-i`;
     }

    return `!border-gray-500 
            !rounded-md !shadow-sm 
            focus:!border-main-color-i 
            focus:!ring-main-color-i`;
    
})

</script>

<template>
  <select
    ref="input" 
    v-model="model"
    :class="cssStyle"
  >
    <slot
      v-if="en_default_option" 
      name="default_option">
      <option value=""> 
        {{ $t('message.fieldSelectAnItem') }}
      </option>
    </slot>

    <slot name="content" />
  </select>
</template>