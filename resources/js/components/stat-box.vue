<template>
  <div :class="size">
    <div :class="'small-box animated zoomInDown fast bg-gradient-'+bg">
      <div class="inner">
        <h3>{{ header }}</h3>
        <p>{{ message }}</p>
      </div>
      <div class="icon">
        <i :class="'fa fa-'+icon"></i>
      </div>
      <a :href="url" class="small-box-footer">{{ footer }} <i class="fas fa-arrow-circle-right"></i></a>
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
