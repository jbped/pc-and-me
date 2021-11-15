<template>
    <v-app>
        <headerComponent></headerComponent>
        <v-main>
            <v-container fluid>
                <router-view> </router-view>
            </v-container>
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
