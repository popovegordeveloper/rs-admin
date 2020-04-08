<template>
    <div class="page-container">
        <sidebar :user="user" :menu="menu"/>
    </div>
</template>

<script>
    import Sidebar from "./Sidebar";

    export default {
        name: "Display",
        components: {Sidebar},
        props: ['user', 'menu']
    }
</script>

<style lang="sass" scoped>
    .page-container
        background-color: #f6f7f9
</style>
