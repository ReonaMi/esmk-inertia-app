<template>
    <layout v-bind:title="title">
        <h1>{{ title }}</h1>
        <inertia-link href="/dashboard/superadmin/logout">Logout</inertia-link>
    </layout>
</template>

<script>
import Layout from '../../Shared/Layout.vue'
export default {
    components: {
        Layout
    },
    props: {
        title: String,
    }
}
</script>