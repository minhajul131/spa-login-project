<template>
    <div class="container ">
        <div class="card">
            <div class="card-header">
                Dashboard
            </div>
            <div class="card-body">
                Welcome {{ user.name}}
            </div>
            <a href="/" class="nav-link" @click.prevent="logout">Logout</a>
        </div>
    </div>
</template>
<script>
export default {

    methods: {
        logout(){
            axios.post('/logout').then(response => {
                // this.$router.push({ name: 'home'});
                this.$toast.success({
                        title: 'Success!',
                        message: 'Logged Out'
                    })
                    localStorage.removeItem("auth");
                    this.$store.commit('SET_AUTHENTICATED', false);
                    this.$router.push({ name: 'login'});
            })
        }
    },

    computed: {
        user(){
            return this.$store.getters.getUser;
        }
    }
}
</script>
<style>
    
</style>