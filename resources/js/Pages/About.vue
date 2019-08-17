<template>
  <layout>
    <h1>About</h1>
    <inertia-link :href="route('welcome')">Welcome page</inertia-link>
  </layout>
</template>

<script>
  import Layout from '@/Shared/Layout'

  export default {
    components: {
      Layout,
    }
  }
</script>
