<template>
    <div class="container">
        <form @submit.prevent="search">
            <div class="row">
                <div class="col-lg-12">
                    <input type="search"
                           class="form-control"
                           placeholder="Search"
                           v-model="query"
                           >
                </div>
            </div>
        </form>

        <div class="row" v-if="filteredLibraries.length">
            <div class="col-lg-12">
                <library v-for="library in filteredLibraries"
                         :library="library"
                         :key="library.id"
                         />
           </div>
    </div>


</div>
</template>

<script>
    import Library from './partials/Library'

    export default {
        data () {
            return {
                libraries: [],
                query: '',
            }
        },

        components: {
            Library
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
