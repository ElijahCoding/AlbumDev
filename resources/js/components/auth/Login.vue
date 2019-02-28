<template>
    <v-app id="inspire">
        <v-container fluid fill-height>
          <v-layout align-center justify-center>
            <v-flex xs12 sm8 md4>
              <v-card class="elevation-12">
                <v-toolbar dark>
                  <v-toolbar-title>Login</v-toolbar-title>
                  <v-spacer></v-spacer>
                </v-toolbar>
                <v-card-text>

                  <v-form>
                    <v-text-field prepend-icon="person"
                                  name="email"
                                  label="Email"
                                  type="email"
                                  v-model="credentials.email"
                                  >
                    </v-text-field>

                    <v-text-field prepend-icon="lock"
                                  name="password"
                                  label="Password"
                                  id="password"
                                  type="password"
                                  v-model="credentials.password"
                                  >
                    </v-text-field>

                    <v-card-actions>
                      <v-spacer></v-spacer>
                      <v-btn dark @click.prevent="login(credentials)" type="submit">
                          Login
                      </v-btn>
                    </v-card-actions>
                  </v-form>
                </v-card-text>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
      </v-content>
    </v-app>

</template>

<script>
    import { mapActions } from 'vuex'

    export default {
        data () {
            return {
                credentials: {
                    email: '',
                    password: ''
                }
            }
        },

        methods: {
            ...mapActions({
                login: 'auth/login'
            })
        }
    }
</script>
