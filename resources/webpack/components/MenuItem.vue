<template>
    <li v-if="item.is_group" class="nav-main-heading">
        <span class="sidebar-mini-hidden">{{ item.title }}</span>
    </li>
    <li v-else @click="openList(item.childes.length)" :class="{open: is_open}">
        <a :href="item.url ? item.url : '#'" :class="{ 'nav-submenu': item.childes.length}">
            <i v-if="item.icon" :class="item.icon" class="menu-item-icon"></i>
            <span>{{ item.title }}</span>
        </a>
        <ul v-if="item.childes.length">
            <menu-item v-for="child in item.childes" :item="child"/>
        </ul>
    </li>
</template>

<script>
    export default {
        name: "MenuItem",
        props: ['item'],
        data(){
            return {
                is_open: false
            };
        },
        methods: {
            openList(count_childes) {
                if (count_childes)
                    this.is_open = !this.is_open;
            }
        }
    }
</script>

<style lang="sass" scoped>
    .nav-main-heading
        padding: 30px 18px 6px 18px
        font-size: 13px
        font-weight: 600
        text-transform: uppercase
        letter-spacing: 1px
        opacity: .55
    .nav-submenu
        padding-right: 35px

</style>
