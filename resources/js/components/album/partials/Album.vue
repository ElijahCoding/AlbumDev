<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong v-text="album.title"></strong>
                    <span class="float-right" v-text="album.description"></span>
                </div>

                <pictures  v-if="album.pictures.length" :pictures="album.pictures"></pictures>

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
</template>

<script>
    import Pictures from '../picture/Pictures'
    export default {
        props: {
            album: {
                required: true,
                type: Object
            }
        },

        components: {
            Pictures
        },

        data () {
            return {
                moment
            }
        }
    }
</script>
