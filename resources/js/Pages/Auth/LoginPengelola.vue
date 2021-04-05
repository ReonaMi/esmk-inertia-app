<template>
    <layout v-bind:title="title">
        <form @submit.prevent="login">
            <div v-if="$page.props.flash.message" class="alert">
                {{ $page.props.flash.message }}
            </div>
            <div class="form-group">
                <label>E-Mail</label>
                <input type="text" class="form-control" v-model="user.email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" v-model="user.password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </layout>
</template>

<script>
import Layout from '../../Shared/Layout.vue'
export default {
    components: {
        Layout
    },
    data(){
        return {
            user: {
                email: '',
                password: ''
            }
        }
    },
    props: {
        title: String,
    },
    methods: {
        login(){
            // console.log(this.user);
            this.$inertia.post('/login-pengelola', this.user);
        }
    }
}
</script>