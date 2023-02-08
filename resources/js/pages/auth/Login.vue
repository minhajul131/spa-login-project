<template>
    <div>
      <div class="container">
        <div class="py-5">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card card-default">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">
                            <form action="" method="post" @submit.prevent="login()">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" v-model="loginForm.email" class="form-control" placeholder="Email" :class="{ 'is-invalid': loginForm.errors.has('email') }">
                                    <!-- <has-error :form="loginForm" field="email"></has-error> -->
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" v-model="loginForm.password" class="form-control" placeholder="Password" :class="{ 'is-invalid': loginForm.errors.has('password') }">
                                    <!-- <has-error :form="loginForm" field="password"></has-error> -->
                                </div>
                                <div class="form-group"><button class="btn btn-success px-4" type="submit">Login</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>  
    </div>
</template>
<script>
import {Form} from 'vform';

export default {
    data(){
        return {
            loginForm: new Form({
                email: '',
                password: ','
            }),
        }
    },
    methods: {
        login(){
            axios.get('/sanctum/csrf-cookie').then(response => {
                
                this.loginForm.post('/login').then(response => {
                    this.$router.push({ name: 'dashboard'});

                    this.$toast.success({
                        title: 'Success!',
                        message: 'Welcome'
                    })
                });
            });
        },
        getUserData(){
            axios.get('/api/user').then(response => {
                let user = response.data;
                this.$store.commit('SET_USER', user);
                this.$store.commit('SET_AUTHENTICATED', user);

                localStorage.setItem("auth", ture);
            });
        }
    },
    mounted(){
        // this.getUserData();
    }
}
</script>
<style>
    
</style>