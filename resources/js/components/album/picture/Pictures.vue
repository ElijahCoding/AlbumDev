<template>
    <div class="card">
        <div class="row">
            <div class="col-md-3 mt-3" v-for="picture in pictures" data-toggle="modal" :data-target="'#picture-' + picture.id">
                <div class="card">
                    <img class="card-img-top"
                         :src="picture.file_path"
                         :alt="picture.name"
                         >
                </div>

                <div class="modal fade" :id="'picture-' + picture.id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" :id="'picture-' + picture.id">{{ picture.name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
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
