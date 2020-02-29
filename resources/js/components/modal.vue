<template>
  <div>
    <div class="modal animated fadeIn fast">
      <div class="modal-dialog modal-lg animated bounceInDown" style="animation-delay: .2s;">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">{{ header }}</h4>
            <button type="button" class="close" @click="$emit('closeModal')">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body p-0">
            <slot></slot>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ['id', 'header', 'footer'],
  mounted() {}
}
</script>
