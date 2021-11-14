<template>
    <v-container>
        <v-container class="d-flex justify-content-between pb-0">
            <p class="text-h5 secondary--text mb-0 flex-grow-1">Builds</p>
            <p class="text-subtitle grey--text text--darken-2 mt-auto mb-0">
                Count: {{ buildList.count }}
            </p>
        </v-container>
        <v-divider class="mb-4"></v-divider>
        <v-row>
            <v-col
                class="col-12 col-md-6 col-xl-4"
                v-for="(build, i) in buildList.builds"
                :key="i"
            >
                <v-card>
                    <router-link
                        :to="{
                            name: 'ViewBuild',
                            params: { id: build.id },
                        }"
                        style="text-decoration: none"
                    >
                        <v-card-title
                            class="pb-0 hoverLink font-weight-medium"
                            >{{ build.name }}</v-card-title
                        >
                    </router-link>
                    <v-card-subtitle class="pt-0">
                        Created: {{ convertDate(build.created_at) }}
                    </v-card-subtitle>
                    <v-card-text class="white--text">{{
                        build.description
                    }}</v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    data: () => ({
        buildList: {},
    }),
    methods: {
        getBuildList() {
            axios
                .get("/api/build")
                .then((response) => {
                    this.buildList = response.data;
                })
                .catch((error) => console.log(error));
        },
        convertDate(data) {
            let date = new Date(data);
            return `${date.getMonth()}/${date.getDate()}/${date.getFullYear()}`;
        },
    },
    created() {
        this.getBuildList();
    },
};
</script>

<style lang="scss" scoped>
.hoverLink:hover {
    cursor: pointer;
    text-decoration: underline;
}
</style>
