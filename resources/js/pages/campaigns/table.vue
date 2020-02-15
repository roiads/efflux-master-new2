<template>
    <div class="col-md-8">
        <div class="card animated fadeInUp fast card-light">
            <div class="card-header py-2">
                <h3 class="card-title mb-0">Active campaigns</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="#" data-source-selector="#card-refresh-content"><i class="fas fa-sync-alt"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="jumbotron p-5 text-center">Chart Here</div>
            </div>
        </div>
        <div class="d-none" id="card-refresh-content">
            <div class="jumbotron p-5 text-center"><strong>Refreshed</strong> Chart Here</div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                campaigns: []
            }
        },
        created() {
        },
        methods: {
        }
    }
</script>
