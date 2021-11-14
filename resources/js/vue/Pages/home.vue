<template>
    <v-container>
        <p class="text-h4 primary--text">Welcome to PC and Me!</p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
            recusandae ipsum dolores id, magnam nulla eos voluptas aperiam.
            Asperiores voluptatem labore quos dolore tempore a repellat quaerat
            optio temporibus aperiam! Adipisci architecto ab amet praesentium.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Exercitationem quo commodi deleniti, veritatis deserunt magni
            necessitatibus, harum saepe sequi incidunt eum consequuntur facilis,
            ea amet aut error. Accusantium ratione ex id mollitia, in
            consectetur facilis et nihil facere eius incidunt modi voluptates
            unde. Voluptates rem blanditiis animi mollitia expedita a
            praesentium nobis, dolorem consequuntur neque illum rerum unde sunt
            ullam fugiat esse dolorum quasi. Culpa odio velit eum illo quaerat
            at, quae laudantium amet aut.
        </p>
        <p class="text-h5 secondary--text">Get Started</p>
        <v-item-group>
            <v-container>
                <v-row>
                    <v-col v-for="(item, i) in items" :key="i" cols="12" md="4">
                        <v-item>
                            <v-hover v-slot="{ hover }">
                                <v-card
                                    :color="hover ? 'primary' : ''"
                                    :elevation="hover ? 8 : 1"
                                    transition="fade-transition"
                                    class="d-flex align-center"
                                    dark
                                    height="200"
                                    @click="routerPush(item.name)"
                                >
                                    <p
                                        class="
                                            text-h5
                                            flex-grow-1
                                            text-center
                                            ma-0
                                        "
                                        :class="
                                            hover
                                                ? 'black--text'
                                                : 'white--white'
                                        "
                                    >
                                        {{ item.title }}
                                    </p>
                                </v-card>
                            </v-hover>
                        </v-item>
                    </v-col>
                </v-row>
            </v-container>
        </v-item-group>
    </v-container>
</template>

<script>
export default {
    data: () => ({
        items: [
            {
                title: "View Builds",
                icon: "mdi-desktop-tower",
                name: "BuildList",
            },
            {
                title: "View Parts List",
                icon: "mdi-grid-large",
                name: "PartsList",
            },
            {
                title: "Create a New Build",
                icon: "mdi-plus",
                name: "NewBuild",
            },
        ],
    }),
    methods: {
        routerPush(name) {
            this.$router.push({
                name: name,
            });
        },
    },
};
</script>

<style scoped></style>
