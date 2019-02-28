<template>
    <v-app>
        <v-toolbar dark>
            <v-toolbar-title>Album</v-toolbar-title>
            <v-spacer></v-spacer>

            <v-toolbar-items>
              <v-btn flat>
                  <v-menu offset-y>
                      <v-btn
                        slot="activator"
                        light
                      >
                        Programming
                      </v-btn>
                      <v-list>
                        <v-list-tile
                          v-for="(item, index) in items"
                          :key="index"
                          @click=""
                        >
                          <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                        </v-list-tile>
                      </v-list>
                  </v-menu>
              </v-btn>
              <v-btn flat>Link Two</v-btn>
              <v-btn flat>Link Three</v-btn>
            </v-toolbar-items>
        </v-toolbar>

        <v-container>
            <router-view></router-view>
        </v-container>
    </v-app>
</template>

<script>
    export default {
        data () {
            return {
                items: [
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me 2' }
      ]
            }
        }
    }
</script>
