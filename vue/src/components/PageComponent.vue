<template>
    <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">
        {{ title }}
    </h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      
      <div class="px-4 py-6 sm:px-0">
        <slot></slot>
      </div>
     
    </div>
  </main>
</template>

// this is a setup method of the composition API. It is a new way to write Vue components. It is not a requirement to use it, but it is a good practice to use it. // https://v3.vuejs.org/guide/composition-api-setup.html
<script setup> 
    const props = defineProps({
        title: String,
    });
</script>



<style>
</style>