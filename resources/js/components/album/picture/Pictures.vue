<template>
    <div class="card">
        <div class="row">
            <div class="col-md-3 mt-2" v-for="picture in pictures">
                <div class="card" @click="showModal(picture.id)">
                    <img class="card-img-top"
                         :src="picture.file_path"
                         :alt="picture.name"
                         >
                </div>

                <modal :name="'picture-' + picture.id">
                    <p>{{ picture.name }}</p>
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

        methods: {
            showModal (id) {
                this.$modal.show(`picture-${id}`);
            }
        }
    }
</script>



<style scoped>
    .card {
        border: none;
    }
</style>
