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

<style scoped>

</style>
