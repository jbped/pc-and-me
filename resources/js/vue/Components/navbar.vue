<template>
    <v-bottom-navigation fixed grow shift color="#20A4F3" v-model="value">
        <v-btn value="recent">
            <span>Builds</span>

            <v-icon>mdi-desktop-tower</v-icon>
        </v-btn>

        <v-btn value="home">
            <span>Home</span>

            <v-icon>mdi-home-variant</v-icon>
        </v-btn>

        <v-btn value="nearby">
            <span>Parts</span>

            <v-icon>mdi-grid-large</v-icon>
        </v-btn>
    </v-bottom-navigation>
</template>

<script>
export default {
    data: () => ({
        value: "home",
    }),
};
</script>
