<template>
    <div class="container">
        <form @submit.prevent="search">
            <div class="row">
                <div class="col-lg-10">
                    <input type="search"
                           class="form-control"
                           placeholder="Search"
                           v-model="query"
                           >
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <div class="row" v-if="libraries.length">
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
        data () {
            return {
                libraries: [],
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
                         this.libraries = response.data
                     })
            }
            // search () {
            //     axios.get('/programming/cdn/search', {
            //         params: {
            //             'query': this.query
            //         }
            //     }).then(response => {
            //         console.log(response.data);
            //     })
            // }
        },

        computed: {
            filteredLibraries () {
                let data = []

                this.libraries.forEach(item => {
                    if (item.name.toLowerCase() === this.query.toLowerCase()) {
                        data.push(item)
                    }
                })

                data = data.concat(
                    this.libraries.filter(row => {
                      return Object.keys(row).some(key => {
                          if (key === 'name') {
                              return (
                                String(row[key]).toLowerCase().indexOf(this.query.toLowerCase()) > -1
                              )
                          }
                      })
                  }).slice(0, 20)
                )

                return _.uniqBy(data, (e) => {
                    return e.name
                })
            }
        }
    }
</script>
