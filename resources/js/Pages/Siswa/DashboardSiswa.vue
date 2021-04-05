<template>
    <layout v-bind:title="title">
        <h1>{{ title }}</h1>
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