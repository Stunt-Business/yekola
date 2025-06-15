<script setup>
</script>
<template>
  <div class="p-4">
    <slot name="content">
      <!-- Succes message -->
      <div
        v-show="$page.props.flash.message"
        class="mt-2 font-medium text-sm 
                    text-green-600 dark:text-green-400"
      >
        {{ $page.props.flash.message }}
      </div>

      <!-- Error message -->
      <div
        v-show="$page.props.flash.error"
        class="mt-2 font-medium text-sm 
                    text-red-600 dark:text-red-400"
      >
        {{ $page.props.flash.error }}
      </div>
    </slot>
  </div>
  <!-- End of p-4 -->
</template>