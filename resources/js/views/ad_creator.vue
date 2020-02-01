<template>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-12 animated fadeInUp fast">
                <button class="btn btn-secondary" data-toggle="modal" data-target="#editor">
                  Click here to open GrapesJS Editor
                </button>
              </div>
            </div>
        </div>
        <modal>
            <editor></editor>
        </modal>
    </div>
</template>

<script>
  export default {
    mounted() {
    }
  }
</script>
