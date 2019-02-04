<template>
    <div>
        <album-create></album-create>

        <div class="container mt-5" v-if="albums.length" v-for="album in albums" :key="album.id">
            <album :album="album"></album>
        </div>

    </div>
</template>

<script>
    import AlbumCreate from './partials/AlbumCreate'
    import Album from './partials/Album'

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
            }
        },

        components: {
            AlbumCreate,
            Album
        }
    }
</script>
