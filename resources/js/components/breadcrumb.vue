<template>
  <div class="row">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <router-link tag="a" to="/dashboard">Dashboard</router-link>
        </li>
        <li class="breadcrumb-item">
          <router-link tag="a" :to="'/'+page">{{ page }}</router-link>
        </li>
        <li class="breadcrumb-item" v-if="name">{{ name }}</li>
        <li class="breadcrumb-item" v-if="view">{{ view }}</li>
      </ol>
    </nav>
  </div>
</template>
<script>
export default {
  name: 'breadcrumbs',
  props: ['page', 'view', 'name']
}
</script>
