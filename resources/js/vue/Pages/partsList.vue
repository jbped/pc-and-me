<template>
    <v-container>
        <v-container class="d-flex pb-0" justify-content="between">
            <p class="text-h5 secondary--text mb-0 flex-grow-1">Parts</p>
            <p
                v-if="Object.keys(partList).length > 0"
                class="text-subtitle grey--text text--darken-2 mt-auto mb-0"
            >
                Count: {{ partList.length }}
            </p>
        </v-container>
        <v-divider class="mb-4"></v-divider>
        <v-row
            v-if="Object.keys(partList).length === 0"
            class="fill-height"
            align-content="center"
            justify="center"
        >
            <v-col class="text-subtitle-1 text-center" cols="12">
                Retrieving Parts
            </v-col>
            <v-col cols="6">
                <v-progress-linear
                    color="primary"
                    indeterminate
                    rounded
                    height="6"
                ></v-progress-linear>
            </v-col>
        </v-row>
        <v-row v-else>
            <v-col class="col-12">
                <v-card>
                    <v-card-title>
                        <v-text-field
                            v-model="search"
                            append-icon="mdi-magnify"
                            label="Search"
                            single-line
                            hide-details
                        ></v-text-field>
                    </v-card-title>
                    <v-data-table
                        :loading="Object.keys(partList).length === 0"
                        :headers="headers"
                        :items="partList"
                        :items-per-page="15"
                        :search="search"
                        multi-sort
                        class="elevation-1"
                    ></v-data-table>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    data: () => ({
        partList: {},
        search: "",
        headers: [
            {
                text: "Product Name",
                align: "start",
                sortable: true,
                value: "product_name",
            },
            {
                text: "Manufacturer",
                align: "start",
                sortable: true,
                value: "manufacturer",
            },
            {
                text: "Part Type",
                align: "start",
                sortable: true,
                value: "part_type",
            },
        ],
    }),
    methods: {
        getPartList() {
            axios
                .get("/api/component/list")
                .then((response) => {
                    this.partList = response.data;
                })
                .catch((error) => console.log(error));
        },
        convertDate(data) {
            let date = new Date(data);
            return `${date.getMonth()}/${date.getDate()}/${date.getFullYear()}`;
        },
    },
    created() {
        this.getPartList();
    },
};
</script>

<style lang="scss" scoped>
.hoverLink:hover {
    cursor: pointer;
    text-decoration: underline;
}
</style>
