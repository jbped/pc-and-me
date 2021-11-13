<template>
    <div>
        <p class="text-h4 mb-0">Create a New Build</p>
        <v-divider></v-divider>
        <v-container class="mt-2">
            <v-form>
                <v-row>
                    <v-col cols="12" lg="6">
                        <p class="text-h5">About</p>
                        <v-sheet width="100%" class="pa-4">
                            <v-text-field
                                label="Build Name"
                                name="build-name"
                                filled
                            ></v-text-field>
                            <v-textarea
                                filled
                                counter="255"
                                name="build-description"
                                label="Description"
                                :rules="descriptionRules"
                                :value="descriptionValue"
                            ></v-textarea>
                            <v-text-field
                                label="Operating System"
                                name="build-os"
                                filled
                            ></v-text-field>
                        </v-sheet>
                    </v-col>
                    <v-col cols="12" lg="6">
                        <p class="text-h5">Parts</p>
                        <v-sheet
                            v-if="partTypes.length === 0"
                            width="100%"
                            class="pa-4"
                        >
                            <skeletonPartType></skeletonPartType>
                        </v-sheet>
                        <v-sheet v-else width="100%" class="pa-4">
                            <v-card
                                v-for="(type, index) in partTypes"
                                :key="index"
                                elevation="3"
                                class="my-4"
                            >
                                <v-card-title>
                                    {{ type.descriptor }}
                                </v-card-title>
                            </v-card>
                        </v-sheet>
                    </v-col>
                </v-row>
            </v-form>
        </v-container>
    </div>
</template>

<script>
import skeletonPartType from "../Components/NewBuild/skeletonPartType.vue";
export default {
    components: { skeletonPartType },
    data: () => ({
        descriptionRules: [(v) => v.length <= 255 || "255 Character Maximum"],
        descriptionValue: "",
        partTypes: [],
        buildParts: [],
    }),
    methods: {
        getPartTypeList() {
            axios
                .get("api/component")
                .then((response) => {
                    this.partTypes = response.data;
                    console.log(response.data);
                })
                .catch((error) => console.log(error));
        },
    },
    created() {
        this.getPartTypeList();
    },
};
</script>

<style></style>
