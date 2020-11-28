<template>
    <div>
        <h1>this is the main app running in "mainapp" tag!. Here we can add menus etc that are for all pages!</h1>
         <router-view></router-view>
    </div>
</template>


<script>
export default {
    created(){
        console.log(this.$store.state)
    }
}
</script>
