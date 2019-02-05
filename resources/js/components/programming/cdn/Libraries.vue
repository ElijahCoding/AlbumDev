<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <input type="search"
                       class="form-control"
                       placeholder="Search"
                       v-model="query"
                       >
            </div>
        </div>

        <div class="row" v-if="links.length">
            <div class="col-lg-12">

                <div class="card mt-3" v-for="library in filteredLibraries" :key="library.id">
                   <div class="card-header">
                       <strong>{{ library.name }}</strong>
                   </div>
                   <div class="card-body">
                     <h4 class="card-title">
                         {{ library.link }}
                     </h4>
                     <h5 class="card-text mt-1">
                         <a href="#">Copy</a> &nbsp; <a href="#">Copy HTML</a>
                     </h5>

                     <a href="#" class="btn btn-primary mt-1">
                         Go somewhere
                     </a>
                   </div>
               </div>

           </div>
    </div>
</div>
</template>

<script>
    export default {
        props: ['libraries'],

        data () {
            return {
                links: [],
                query: ''
            }
        },

        created () {
            this.getLibraries()
        },

        methods: {
            getLibraries () {
                axios.get('/api/libraries')
                     .then(response => {
                         this.links = response.data
                     })
            }
        },

        computed: {
            filteredLibraries () {
                let data = this.links

                data = data.filter(row => {
                  return Object.keys(row).some(key => {
                      if (key === 'name') {
                          return (
                            String(row[key])
                              .toLowerCase()
                              .indexOf(this.query.toLowerCase()) > -1
                          )
                      }
                  })
              }).slice(0, 100)

                return data;
            }
        }
    }
</script>
