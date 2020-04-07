<template>
    <nav id="sidebar">
        <div class="logo">
            <img src="/vendor/rs-admin/images/logo.svg" alt="LOGO">
        </div>
        <div class="account">
            <p class="text-center mb-0 pb-0">
                {{ user.name }}
                <span @click="logout" class="btn-logout">
                    <i class="fal fa-sign-out"></i>
                </span>
            </p>
        </div>
    </nav>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "Sidebar",
        props: ['user', 'menu'],
        methods: {
            logout(){
                axios.post('admin/api/auth/logout').then(({data}) => {
                    if (data.status)
                        window.location.href = data.redirect_url;
                })
            }
        }
    }
</script>

<style lang="sass" scoped>
    #sidebar
        background-color: #fff
        max-width: 230px
        height: 100vh
        box-shadow: 5px 0 10px #e4e7ed

        .btn-logout
            margin-left: 10px
            cursor: pointer
            transition: color .12s ease-out

            &:hover
                color: $primary-color

        .account
            width: 100%
            padding-top: 20px
            padding-bottom: 20px
            background-color: #f6f7f9

        .logo
            width: 100%
            padding-top: 20px
            padding-bottom: 20px

            img
                display: block
                margin: 0 auto
                max-width: 50%
</style>
