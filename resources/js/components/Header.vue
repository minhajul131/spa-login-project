<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-between" style="background-color: #e3f2fd;">
        <div class="container">
          <router-link class="navbar-brand" :to="{name: 'home'}">SPA</router-link>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">           
            <ul class="navbar-nav">
              <li class="nav-item">
                <router-link class="nav-link" :to="{name: 'home'}">Home</router-link>
              </li>
              <li class="nav-item" v-if="auth">
                <router-link class="nav-link" :to="{name: 'dashboard'}">Dashboard</router-link>
              </li>
              <li class="nav-item" v-if="!auth">
                <router-link class="nav-link" :to="{name: 'login'}">Login</router-link>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</template>

<script>
import axios from 'axios';

export default {
    methods: {
        
    },
    computed: {
        auth(){
            return this.$store.getters.getAuthenticated;
        }
    }
}
</script>
<style>
    
</style>