<template>
    <div>
        <section class="content">
            <div class="container-fluid">
                <statbox-list></statbox-list>

                <div class="row">
                    <domains-table></domains-table>
                    <campaigns-table></campaigns-table>


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
