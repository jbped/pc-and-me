<template>
    <div>
        <p class="text-h4 secondary--text mb-0">Create a New Build</p>
        <v-divider></v-divider>
        <v-container class="mt-2">
            <v-form>
                <v-row>
                    <v-col cols="12" lg="6">
                        <p class="text-h5 primary--text">About</p>
                        <v-sheet width="100%" class="pa-4">
                            <v-text-field
                                v-model="build.name"
                                label="Build Name"
                                name="build-name"
                                :rules="buildNameRules"
                                filled
                                required
                            ></v-text-field>
                            <v-textarea
                                v-model="build.description"
                                filled
                                counter="255"
                                name="build-description"
                                label="Description"
                                :rules="descriptionRules"
                                :value="build.description"
                            ></v-textarea>
                            <v-text-field
                                v-model="build.operating_system"
                                label="Operating System"
                                name="build-os"
                                filled
                            ></v-text-field>
                        </v-sheet>
                    </v-col>
                    <v-col cols="12" lg="6">
                        <p class="text-h5 primary--text">Parts</p>
                        <v-sheet
                            v-if="this.waitLoad.partList"
                            width="100%"
                            class="pa-4"
                        >
                            <skeletonPartType></skeletonPartType>
                        </v-sheet>
                        <v-sheet v-else width="100%" class="pa-4">
                            <div v-for="type in partTypes" :key="type.type">
                                <!-- FIXME on occasion the part dropdown options will say no data available. updating item-value="product_name" to item-value="'product_name'" and back will fix the issue -->
                                <v-select
                                    v-model="selectedPartsForBuild[type.type]"
                                    :items="partList[type.type]"
                                    item-text="product_name"
                                    item-value="id"
                                    :label="type.name"
                                    :name="type.type"
                                    filled
                                >
                                </v-select>
                            </div>
                        </v-sheet>
                    </v-col>
                </v-row>
                <v-btn
                    color="primary"
                    fab
                    dark
                    bottom
                    right
                    fixed
                    @click="submit"
                >
                    <v-icon>mdi-content-save</v-icon>
                </v-btn>
            </v-form>
        </v-container>
        <partModal v-model="modal" :partType="selectedType"></partModal>
    </div>
</template>

<script>
import skeletonPartType from "../Components/NewBuild/skeletonPartType.vue";
import partModal from "../Components/NewBuild/partModal.vue";
export default {
    components: { skeletonPartType, partModal },
    data: () => ({
        waitLoad: {
            partType: true,
            partList: true,
        },

        //
        build: {
            name: "",
            description: "",
            operating_system: "",
        },
        selectedPartsForBuild: {},

        buildNameRules: [(v) => !!v || "Build Name is required"],
        descriptionRules: [(v) => v.length <= 255 || "255 Character Maximum"],

        partTypes: [
            { name: "Computer Case", type: "case" },
            { name: "Cooler", type: "cooler" },
            { name: "Processor", type: "cpu" },
            { name: "Graphics Card", type: "gpu" },
            { name: "Motherboard", type: "mobo" },
            { name: "Power Supply", type: "psu" },
            { name: "Memory", type: "ram" },
            { name: "Storage", type: "storage" },
        ],
        partList: {},

        modal: false,

        selectedType: {},
    }),
    methods: {
        // getPartTypeList() {
        //     axios
        //         .get("api/component")
        //         .then((response) => {
        //             this.partTypes = response.data;
        //             this.waitLoad.partTypes = false;
        //             console.log(response.data);
        //         })
        //         .catch((error) => console.log(error));
        // },
        getPartList() {
            axios
                .get("/api/component/list")
                .then((response) => {
                    this.partTypes.forEach(({ type }) => {
                        const selectedParts = response.data.filter((part) => {
                            if (part.part_type === type) {
                                return part;
                            }
                        });
                        this.partList[type] = selectedParts;
                        this.waitLoad.partList = false;
                    });
                    // console.log("partList", this.partList);
                    // this.partList = response.data;
                })
                .catch((error) => console.log(error));
        },
        submit() {
            let buildParts = JSON.parse(
                JSON.stringify(this.selectedPartsForBuild)
            );
            let buildDetails = JSON.parse(JSON.stringify(this.build));
            console.log(buildDetails, buildParts);
            axios
                .post("/api/build", buildDetails)
                .then((response) => response.data.id)
                .then((buildId) => {
                    const buildPartsFormatted = { build_parts: [] };
                    for (const type in buildParts) {
                        buildPartsFormatted.build_parts.push({
                            part_id: buildParts[type],
                        });
                    }
                    console.log(buildPartsFormatted);
                    axios
                        .post(`/api/build/${buildId}/part`, buildPartsFormatted)
                        .then((response) =>
                            this.$router.push(`/build/${buildId}`)
                        )
                        .catch((error) => console.log(error));
                })
                .catch((error) => console.log(error));
        },
    },
    created() {
        this.getPartList();
    },
};
</script>

<style></style>
