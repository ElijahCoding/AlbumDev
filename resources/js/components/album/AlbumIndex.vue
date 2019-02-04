<template>
    <div>
        <album-create></album-create>

        <div class="container mt-5" v-if="albums.length" v-for="album in albums" :key="album.id">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong v-text="album.title"></strong>
                            <span class="float-right" v-text="album.description"></span>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    1
                                </div>
                                <div class="col-md-3">
                                    2
                                </div>
                                <div class="col-md-3">
                                    3
                                </div>
                                <div class="col-md-3">
                                    4
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-muted">
                            <strong>
                                Created at {{ moment(album.created_at).format('YYYY-MM-DD') }} ( {{ moment(album.created_at).fromNow() }} )
                            </strong>
                            <span class="float-right">
                                <button class="btn btn-link">Delete</button>
                            </span>
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
                show: true,
                moment
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
