<template>
    <div>
        <section class="content">

            <div class="container-fluid">

                <!-- Small Stat Boxes -->
                <div class="row">

                    <div class="col-6 col-sm-6 col-md-3">
                        <div class="info-box animated flipInY fast bg-info">
                            <span class="info-box-icon"><i class="fas fa-clock"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Now</span>
                                <span class="info-box-number">###</span>
                                <div class="progress"><div class="progress-bar" style="width: 70%"></div></div>
                                <span class="progress-description">Active users on site <i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <div class="info-box animated flipInY fast bg-success" style="animation-delay: .1s;">
                            <span class="info-box-icon"><i class="fas fa-users"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Today</span>
                                <span class="info-box-number">###</span>
                                <div class="progress"><div class="progress-bar" style="width: 70%"></div></div>
                                <span class="progress-description">Today's page views <i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <div class="info-box animated flipInY fast bg-secondary" style="animation-delay: .2s;">
                            <span class="info-box-icon"><i class="fas fa-user"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Unique</span>
                                <span class="info-box-number">###</span>
                                <div class="progress"><div class="progress-bar" style="width: 70%"></div></div>
                                <span class="progress-description">Todays unique visitors <i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <div class="info-box animated flipInY fast bg-danger" style="animation-delay: .3s;">
                            <span class="info-box-icon"><i class="fas fa-exclamation-triangle"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Alerts</span>
                                <span class="info-box-number">###</span>
                                <div class="progress"><div class="progress-bar" style="width: 70%"></div></div>
                                <span class="progress-description">Todays unique visitors <i class="fa fa-arrow-circle-right"></i></span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Charts -->
                <div class="row">

                    <div class="col-md-6">
                        <div class="card animated fadeInUp fast card-light">
                            <div class="card-header py-2">
                                <h3 class="card-title mb-0">Some Stats Here</h3>
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

                    <div class="col-md-6">
                        <div class="card animated fadeInUp fast card-light">
                            <div class="card-header py-2">
                                <h3 class="card-title mb-0">Some Stats Here</h3>
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

                    <div class="col-md-6">
                        <div class="card animated fadeInUp fast card-light">
                            <div class="card-header py-2">
                                <h3 class="card-title mb-0">Some Stats Here</h3>
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

                    <div class="col-md-6">
                        <div class="card animated fadeInUp fast card-light">
                            <div class="card-header py-2">
                                <h3 class="card-title mb-0">Some Stats Here</h3>
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

                </div>

            </div>

        </section>

    </div>

</template>

<script>

    export default {
      mounted() {
        ScrollReveal().reveal('div.card, div.info-box, div.small-box',{
            origin: 'left',
            distance: '150%',
            duration: 500,
            easing: 'ease',
            mobile: true,
            reset: true,
            viewFactor: 0.1
        });
      }
    }
</script>
