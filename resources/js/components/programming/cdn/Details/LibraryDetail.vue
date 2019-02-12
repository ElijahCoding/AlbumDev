<template>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
              {{ library.name }}
            </div>
            <div class="card-body">
              <h5 class="card-title" v-text="library.link"></h5>
              <hr>
              <p class="card-text"
                 v-if="library.library_detail.description"
                 v-text="library.library_detail.description"
                 >
              </p>

              <a :href="library.library_detail.homepage"
                  v-if="library.library_detail.homepage"
                  target="_blank"
                  class="btn btn-primary"
                 >
                 Home Page
             </a>
            </div>
            <a :href="library.library_detail.repository"
               target="_blank"
               class="card-footer text-muted"
               v-if="library.library_detail.repository"
               >
                <strong class="float-left">Repository</strong>
                <span v-text="library.library_detail.repository"></span>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['library'],

        data () {
            return {
                moment
            }
        },

        created () {
            console.log(this.library);
        }
    }
</script>
