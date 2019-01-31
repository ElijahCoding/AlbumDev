<template>
    <form>
        <div class="row text-center">
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
              <textarea class="form-control"
                        name="name"
                        rows="8"
                        cols="80"
                        v-model="album.description"
                        ></textarea>
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
                    description: ''
                }
            }
        },

        methods: {
            createAlbum () {
                console.log(this.album);
            }
        }
    }
</script>

<style scoped>

</style>
