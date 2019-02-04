<template>
    <form>
        <div class="row text-center" v-if="show">
            <div class="form-group col-md-3">
                <h3>Time</h3>
                <datepicker v-model="album.title"
                            :bootstrap-styling="true"
                            :clear-button="true"
                            :calendar-button="true"
                            :typeable="true"
                            placeholder="dd-mm-yyyy"
                            >
                </datepicker>
            </div>

            <div class="form-group col-md-9 text-center">
              <h3>Description</h3>
              <input type="text"
                     class="form-control"
                     placeholder="Some description about this folder"
                     v-model="album.description"
                     >
            </div>

            <div class="col-md-12">
                <button type="submit"
                        class="btn btn-primary form-control"
                        v-if="album.title"
                        @click.prevent="createAlbum"
                        >
                        Create
                </button>
            </div>
        </div>

  </form>
</template>

<script>
    import Datepicker from 'vuejs-datepicker'

    export default {
        components: {
            Datepicker
        },

        data () {
            return {
                album: {
                    title: '',
                    description: '',
                },
                show: true
            }
        },

        methods: {
            createAlbum () {
                axios.post('/albums/store', this.album)
                     .then(response => {
                         this.show = false
                     })
            }
        }
    }
</script>

<style scoped>

</style>
