<template>
    <div class="card">
        <div class="row">
            <div class="col-md-4 mt-2" v-for="picture in pictures">
                <div class="card" @click="showModal(picture.id)">
                    <img class="card-img-top"
                         :src="picture.file_path"
                         :alt="picture.name"
                         >
                </div>

                <modal :name="'picture-' + picture.id"
                        height="auto"
                        :scrollable="true"
                        :adaptive="true"
                       >
                       <div class="card">
                           <img class="card-img-top" :src="picture.file_path" alt="Card image cap">
                       </div>

                       <div class="card-footer text-muted">
                           <strong>
                               {{ moment(picture.created_at).format('YYYY-MM-DD') }}
                               <button class="btn btn-primary">Download</button>
                           </strong>
                           <span class="float-right">
                               <button class="btn btn-danger">Delete</button>
                           </span>
                       </div>
                </modal>

            </div>
        </div>
    </div>
</template>


<script>
    export default {
        props: {
            pictures: {
                required: true,
                type: Array
            }
        },

        data () {
            return {
                moment
            }
        },

        methods: {
            showModal (id) {
                this.$modal.show(`picture-${id}`)
            },

            hideModal (id) {
                this.$modal.hide(`picture-${id}`)
            }
        }
    }
</script>



<style scoped>
    .card {
        border: none;
    }
</style>
