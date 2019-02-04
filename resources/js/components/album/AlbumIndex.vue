<template>
    <div>
        <album-create></album-create>

        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import AlbumCreate from './partials/AlbumCreate'

    export default {
        data () {
            return {
                show: true
            }
        },

        components: {
            AlbumCreate
        },

        methods: {

        }
    }
</script>
