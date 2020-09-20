<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login Component</div>
                    <div class="card-body">
                        <form action="#" @submit.prevent="handleLogin">
                            <div class="form-group">
                                <input type="email" v-model="formData.email">
                            </div>
                            <div class="form-group">
                                <input type="password" v-model="formData.password">
                            </div>
                            <div class="form-group">
                                <button type="submit">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
        return {
            user: [],
            formData: {
                email: '',
                password: ''
            }
        }
    },
    methods: {
        handleLogin() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/api/login', this.formData).then(response => {
                    console.log('User signed in!');
                }).catch(error => console.log(error)); // credentials didn't match
            });
        },
    }
    }
</script>
