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
                            <div class="row" v-if="album.pictures.length">
                                <div class="col-md-3" v-for="picture in album.pictures">
                                    <div class="card">
                                        <img class="card-img-top"
                                             :src="picture.file_path"
                                             :alt="picture.name"
                                             >
                                    </div>
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
                moment,
            }
        },

        components: {
            AlbumCreate
        }
    }
</script>

<style scoped>
    .card {
        border: none;
    }
</style>
