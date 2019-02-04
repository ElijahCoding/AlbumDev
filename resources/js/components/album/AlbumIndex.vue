<template>
    <div>
        <album-create></album-create>

        <div class="container mt-5" v-if="albums.length" v-for="album in albums" :key="album.id">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong v-text="album.title"></strong>
                            <p class="float-right" v-text="album.description"></p>
                        </div>

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
        props: {
            albums: {
                required: true,
                type: Array
            }
        },

        data () {
            return {
                show: true
            }
        },

        created () {
            console.log(this.albums);
        },

        components: {
            AlbumCreate
        },

        methods: {

        }
    }
</script>
