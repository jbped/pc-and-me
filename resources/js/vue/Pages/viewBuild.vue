<template>
    <div v-if="buildDetails === 0">
        <buildSkeleton></buildSkeleton>
    </div>
    <div v-else>
        <p class="text-h4 secondary--text mb-0">{{ buildDetails.name }}</p>
        <p class="text-subtitle grey--text darker-3-text mb-0">
            Created: {{ convertDate(buildDetails.created_at) }}
        </p>
        <v-divider></v-divider>
        <v-container class="px-0">
            <v-row>
                <v-col class="col-12">
                    <p class="text-h5 primary--text mb-0">About</p>
                    <v-sheet class="pa-3">
                        <p class="text-h6 secondary--text mb-0">
                            Operating System
                        </p>
                        <p>{{ buildDetails.operating_system }}</p>
                        <p class="text-h6 secondary--text mb-0">Description</p>
                        <p class="mb-0">{{ buildDetails.description }}</p>
                    </v-sheet>
                </v-col>
            </v-row>
            <v-row>
                <v-col>
                    <p class="text-h5 primary--text mb-0">Parts</p>
                </v-col>
            </v-row>
            <v-row>
                <v-col
                    class="col-12 col-lg-6 col-xl-4"
                    v-for="(type, i) in Object.keys(parts)"
                    :key="i"
                >
                    <partDisplay
                        v-bind:parts="parts"
                        v-bind:type="type"
                    ></partDisplay>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>
import buildSkeleton from "../Components/ViewBuild/viewBuildSkeleton.vue";
import partDisplay from "../Components/ViewBuild/partDisplay.vue";
export default {
    components: { buildSkeleton, partDisplay },
    data: () => ({
        buildDetails: {},
        parts: {
            case: {
                name: "Case",
                list: [],
            },
            mobo: {
                name: "Motherboard",
                list: [],
            },
            cpu: {
                name: "Processor",
                list: [],
            },
            cooler: {
                name: "Cooler",
                list: [],
            },
            gpu: {
                name: "Graphics Card",
                list: [],
            },
            ram: {
                name: "Memory",
                list: [],
            },
            storage: {
                name: "Storage",
                list: [],
            },
            psu: {
                name: "Power Supply",
                list: [],
            },
        },
    }),
    methods: {
        getBuildInfo() {
            axios
                .get(`/api/build/${this.$route.params.id}`)
                .then((response) => {
                    this.buildDetails = response.data;
                    this.sortParts();
                })
                .catch((error) => console.log(error));
        },
        getSpecTypes() {
            axios
                .get(`/api/spec`)
                .then((response) => {
                    this.specType = response.data;
                })
                .catch((error) => console.log(error));
        },
        convertDate(data) {
            const date = new Date(data);
            return `${date.getMonth()}/${date.getDate()}/${date.getFullYear()}`;
        },

        // Sorts parts from the buildDetails
        sortParts() {
            for (const key in this.parts) {
                this.buildDetails.build_parts.filter((part, i) => {
                    if (part.part_type == key) {
                        return this.parts[key].list.push(part);
                    }
                });
            }
        },
    },
    created() {
        this.getBuildInfo();
    },
};
</script>

<style></style>
