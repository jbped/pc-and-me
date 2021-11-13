<template>
    <v-app>
        <headerComponent></headerComponent>
        <v-main class="mx-4 mx-lg-8 mx-xl-14 mt-3 mt-lg-6">
            <router-view />
        </v-main>
    </v-app>
</template>

<script>
import headerComponent from "./Components/header.vue";

export default {
    name: "app",
    components: { headerComponent },
};
</script>

<style></style>
