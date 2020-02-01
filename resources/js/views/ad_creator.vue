<template>

    <div>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Ad Creator</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Ad Creator</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
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
            <!-- /.container-fluid -->

        </div>
        <model>
          <editor></editor>
        </model>
        <!-- /.content -->

    </div>

</template>

<script>
  export default {
    mounted() {
    }
  }
</script>
