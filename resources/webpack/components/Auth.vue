<template>
    <div class="auth">
        <img src="/vendor/rs-admin/images/logo.svg" alt="RS">
        <h1>Административная панель</h1>
        <h2 class="text-muted">Пожалуйста авторизуйтесь</h2>
        <form method="POST">
            <div class="form-group row">
                <div class="col-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
            <button class="btn btn-block btn-rounded btn-alt-primary">Войти</button>
        </form>
    </div>
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
    max-width: 1200px
    background-color: #fff
    margin: 0 auto
    min-height: 100vh
    padding-top: 24px
    padding-left: 24px
    padding-right: 24px

    h1
        line-height: 1.2
        color: #171717
        font-weight: 700
        text-align: center
        margin-bottom: 10px
        letter-spacing: 2px
        margin-top: 50px

    h2
        line-height: 1.2
        text-align: center
        margin-top: 0
        margin-bottom: 0
        font-size: 1.5rem
        font-weight: 400

    form
        display: flex
        flex-direction: column
        margin: 0 auto
        margin-top: 30px
        width: 33%

    button
        padding: 14px 38px
        font-size: 1rem

    input
        border-left: 0
        border-right: 0
        border-top: 0

    img
        width: 150px
        margin: 0 auto
        margin-top: 50px

</style>
