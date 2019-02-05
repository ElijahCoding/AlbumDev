<template>
    <p></p>
</template>

<script>
    export default {
        props: ['libraries'],

        data () {
            return {
                links: []
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
        }
    }
</script>
