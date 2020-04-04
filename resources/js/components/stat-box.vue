<template>
  <div :class="size">
    <div :class="'small-box animated fadeIn fast bg-gradient-'+bg">
      <div class="inner">
        <h3>{{ header }}</h3>
        <p>{{ message }}</p>
      </div>
      <div class="icon" v-if="icon">
        <b-icon :icon="icon"></b-icon>
      </div>
      <a :href="url" class="small-box-footer">See More...</a>
    </div>
  </div>
</template>
<script>
export default {
  props: ['header', 'message', 'footer', 'icon', 'bg', 'url', 'size'],
  mounted() {

  }
}
</script>
