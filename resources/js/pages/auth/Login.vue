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
                            <form action="" method="post" @click.prevent="login()">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
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
export default {
    methods: {
        login(){
            axios.get('/sanctum/csrf-cookie').then(response => {
                console.log("hello");
                axios.post('/login',{
                    email:'minhajul@gmail.com',
                    password:'12345678',
                }).then(response => {
                    console.log(response);
                    // this.getUserData();
                });
            });
        },
        getUserData(){
            axios.get('/api/user').then(response => {
                console.log(response.data);
            });
        }
    },
    mounted(){
        this.getUserData();
    }
}
</script>
<style>
    
</style>