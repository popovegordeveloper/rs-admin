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
        <div class="content-sidebar">
            <ul class="nav-main">
                <li>
                    <a href="/admin">
                        <i class="fal fa-browser menu-item-icon"></i>
                        <span>Главная</span>
                    </a>
                </li>
            </ul>
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
        },
        mounted(){
            console.log(this.menu);
        }
    }
</script>

<style lang="sass" scoped>
    #sidebar
        background-color: #fff
        max-width: 230px
        height: 100vh
        box-shadow: 5px 0 10px #e4e7ed

        .content-sidebar
            padding: 18px

            .nav-main
                padding: 0
                li
                    list-style: none
                    a
                        color: rgba(87,87,87,.9)
                        text-decoration: none
                        font-weight: 600
                        font-size: 14px
                        padding: 9px 18px 9px 0px
                        transition: color .12s ease-out
                        .menu-item-icon
                            margin-right: 10px
                        span
                            transition: all .26s cubic-bezier(.47,0,.745,.715)
                            letter-spacing: 0.5px

                        &:hover
                            span
                                color: #000
                            .menu-item-icon
                                color: $primary-color
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
            font-size: .9rem

        .logo
            width: 100%
            padding-top: 20px
            padding-bottom: 20px

            img
                display: block
                margin: 0 auto
                max-width: 50%
</style>
