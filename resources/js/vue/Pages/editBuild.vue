<template>
    <div v-if="Object.keys(buildDetails).length === 0">
        <buildSkeleton></buildSkeleton>
    </div>
    <div v-else>
        <p class="text-h4 secondary--text mb-0">Editing Build</p>
        <v-divider></v-divider>
        <v-container class="px-0">
            <v-form>
                <v-text-field
                    v-model="buildDetails.name"
                    label="Build Name"
                    name="build-name"
                    :rules="buildNameRules"
                    filled
                    required
                ></v-text-field>
                <v-textarea
                    v-model="buildDetails.description"
                    filled
                    counter="255"
                    name="build-description"
                    label="Description"
                    :rules="descriptionRules"
                ></v-textarea>
                <v-text-field
                    v-model="buildDetails.operating_system"
                    label="Operating System"
                    name="build-os"
                    filled
                ></v-text-field>
                <div class="d-flex justify-space-between">
                    <v-btn color="error" dark @click="deleteBuild">
                        <v-icon>mdi-delete-outline</v-icon>&nbsp;Delete
                    </v-btn>
                    <v-btn color="primary" dark @click="submit">
                        <v-icon>mdi-content-save</v-icon>&nbsp;Save
                    </v-btn>
                </div>
            </v-form>
        </v-container>
    </div>
</template>

<script>
import buildSkeleton from "../Components/ViewBuild/viewBuildSkeleton.vue";

export default {
    data: () => ({
        buildDetails: {},
        buildNameRules: [(v) => !!v || "Build Name is required"],
        descriptionRules: [(v) => v.length <= 255 || "255 Character Maximum"],
    }),
    methods: {
        getBuildDetails() {
            axios
                .get(`/api/build/${this.$route.params.id}`)
                .then((response) => {
                    this.buildDetails = response.data;
                    console.log(this.buildDetails);
                })
                .catch((error) => console.log(error));
        },
        submit() {
            axios
                .put(`/api/build/${this.$route.params.id}`, this.buildDetails)
                .then((response) => {
                    console.log("Build updated");
                    this.$router.go(-1);
                })
                .catch((error) => console.log(error));
        },
        deleteBuild() {
            axios
                .delete(`/api/build/${this.$route.params.id}`)
                .then((response) => {
                    console.log("Build updated");
                    this.$router.push({ name: "BuildList" });
                })
                .catch((error) => console.log(error));
        },
    },
    components: { buildSkeleton },
    created() {
        this.getBuildDetails();
    },
};
</script>

<style></style>
