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

        <div class="row">
            <div class="col-lg-12">

                <div class="card mt-3">
                   <div class="card-header">
                     Featured
                   </div>
                   <div class="card-body">
                     <h5 class="card-title">Special title treatment</h5>
                     <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     <a href="#" class="btn btn-primary">Go somewhere</a>
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
                query: null
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
                
            }
        }
    }
</script>
