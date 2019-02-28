<template>
    <v-toolbar dark>
        <v-toolbar-title>Album</v-toolbar-title>
        <v-spacer></v-spacer>

        <v-toolbar-items>
          <v-btn flat>Link Two</v-btn>
          <v-btn flat>Link Three</v-btn>

          <v-btn flat>
              <v-menu transition="slide-y-transition" bottom>
                  <v-btn
                    slot="activator"
                    light
                  >
                    Profile
                  </v-btn>
                  <v-list>
                    <v-list-tile @click.prevent="logout()">
                      <v-list-tile-title>Logout</v-list-tile-title>
                    </v-list-tile>
                  </v-list>
              </v-menu>
          </v-btn>
        </v-toolbar-items>
    </v-toolbar>
</template>


<script>
    import { mapActions } from 'vuex'
    export default {
        methods: {
            ...mapActions({
                logout: 'auth/logout'
            })
        }
    }
</script>
