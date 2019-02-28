<template>
    <v-app>
        <Navigation />

        <v-container>
            <router-view></router-view>
        </v-container>
    </v-app>
</template>

<script>
    import Navigation from './partials/Navigation'

    export default {
        components: { Navigation }
    }
</script>
