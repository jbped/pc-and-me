<template>
    <div>
        <v-navigation-drawer
            v-model="drawer"
            app
            clipped
            absolute
            dark
            :permanent="$vuetify.breakpoint.mdAndUp"
            :style="{ top: $vuetify.application.top + 'px', zIndex: 4 }"
        >
            <v-list dense nav>
                <v-list-item v-for="item in items" :key="item.title" link>
                    <v-list-item-icon>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        <v-app-bar dense app clipped-left>
            <v-app-bar-nav-icon
                class="hidden-md-and-up"
                @click.stop="drawer = !drawer"
            ></v-app-bar-nav-icon>
            <v-toolbar-title>PC and Me</v-toolbar-title>
        </v-app-bar>
    </div>
</template>

<script>
export default {
    data() {
        return {
            drawer: null,
            items: [
                { title: "Home", icon: "mdi-home-variant", link: "/" },
                { title: "Builds", icon: "mdi-desktop-tower", link: "/builds" },
                { title: "Parts", icon: "mdi-grid-large", link: "/parts" },
                {
                    title: "Create a Build",
                    icon: "mdi-plus",
                    link: "/new-build",
                },
            ],
            active: "Home",
        };
    },
};
</script>

<style></style>
