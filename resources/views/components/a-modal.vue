<template>
  <b-modal :id="id" :title="title" class="fade show" centered scrollable hide-footer hide-backdrop>
    <slot></slot>
  </b-modal>
</template>
<script>
export default {
  name: "a-modal",
  props: {
    id: {
      type: [String, Number],
      required: true
    },
    title: {
      type: String,
      default: null
    }
  }
};
</script>