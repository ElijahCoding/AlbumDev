<template>
    <div class="container">
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
                        class="btn btn-success form-control"
                        v-if="album.title"
                        @click.prevent="createAlbum"
                        >
                        Create
                </button>
            </div>
        </div>

        <div class="row text-center" v-if="!show">
            <div class="col-md-12">
                <button class="btn btn-success form-control" @click.prevent="process">Process</button>
            </div>
            <div class="col-md-12 mt-5">
                <vue-dropzone ref="myVueDropzone"
                              id="dropzone"
                              :options="dropzoneOptions"
                              @vdropzone-success="loaded"
                              >
                </vue-dropzone>
            </div>
        </div>
    </div>

</template>

<script>
    import Datepicker from 'vuejs-datepicker'
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'

    export default {
        components: {
            Datepicker,
            vueDropzone: vue2Dropzone
        },

        data () {
            return {
                album: {
                    title: '',
                    description: '',
                },
                show: true,

                dropzoneOptions: {
                  url: '',
                  paramName: 'uploadedFile',
                  thumbnailWidth: 100,
                  maxFilesize: 30,
                  headers: {
                      'X-CSRF-Token': window.App.csrfToken
                  }
              }
            }
        },

        methods: {
            createAlbum () {
                axios.post('/albums/store', {
                    'title': moment(this.album.title).format('YYYY-MM-DD'),
                    'description': this.album.description
                }).then(response => {
                    this.show = false
                    this.dropzoneOptions.url = `/albums/${response.data.id}/pictures/store`
                })
            },

            loaded () {
                if (this.$refs.myVueDropzone.getQueuedFiles().length === 0) {
                    this.show = true
                }
            }
        }
    }
</script>

<style scoped>

</style>
