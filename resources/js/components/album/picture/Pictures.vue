<template>
    <div class="card">
        <div class="row">
            <div class="col-md-3 mt-3" v-for="picture in pictures">
                <div class="card">
                    <img class="card-img-top"
                         :src="picture.file_path"
                         :alt="picture.name"
                         >
                </div>
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
        }
    }
</script>



<style scoped>
    .card {
        border: none;
    }
</style>
