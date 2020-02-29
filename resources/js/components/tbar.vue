<template>
  <ul class="nav nav-pills nav-fill ml-auto">
    <li class="nav-item">
      <button @click="$emit('xAdd')" class="nav-link btn btn-outline-success">
        <i class="fa fa-plus"></i> new
      </button>
    </li>
    <li class="nav-item" v-if="id">
      <button @click="$emit('xEdit')" class="nav-link btn btn-outline-secondary">
        <i class="fas fa-pencil-alt"></i> edit
      </button>
    </li>
    <li class="nav-item" v-if="id">
      <button @click="$emit('unsetId')" class="nav-link btn btn-outline-danger">
        <i class="fa fa-times"></i> close
      </button>
    </li>
  </ul>
</template>
<script>
export default {
  name: 'toolbar',
  props: ['id']
}
</script>
