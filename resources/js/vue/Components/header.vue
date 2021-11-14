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
                <v-list-item-group v-model="model">
                    <v-list-item v-for="item in items" :key="item.title" link>
                        <router-link
                            :to="{ name: item.name }"
                            style="text-decoration: none"
                            class="d-flex"
                        >
                            <v-list-item-icon>
                                <v-icon class="secondary--text">{{
                                    item.icon
                                }}</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title
                                    v-text="item.title"
                                ></v-list-item-title>
                            </v-list-item-content>
                        </router-link>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>
        <v-app-bar dense app clipped-left>
            <v-app-bar-nav-icon
                class="hidden-md-and-up"
                @click.stop="drawer = !drawer"
            ></v-app-bar-nav-icon>
            <v-toolbar-title class="primary--text text-h5 font-weight-bold"
                >PC and Me</v-toolbar-title
            >
        </v-app-bar>
    </div>
</template>

<script>
export default {
    data() {
        return {
            drawer: null,
            model: 1,
            items: [
                { title: "Home", icon: "mdi-home-variant", name: "HomePage" },
                {
                    title: "Builds",
                    icon: "mdi-desktop-tower",
                    name: "BuildList",
                },
                { title: "Parts", icon: "mdi-grid-large", name: "PartsList" },
                {
                    title: "Create a Build",
                    icon: "mdi-plus",
                    name: "NewBuild",
                },
            ],
            active: "Home",
        };
    },
};
</script>

<style scoped></style>
