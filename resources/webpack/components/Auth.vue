<template>
    <div>

    </div>
    <form class="auth" method="POST">
        <input type="email" name="email">
        <input type="password" name="password">
        <button>Войти</button>
    </form>
</template>

<script>
    export default {
        name: "Auth"
    }
</script>

<style lang="sass" scoped>
.auth
    display: flex
    flex-direction: column
</style>
