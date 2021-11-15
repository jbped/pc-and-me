<template>
    <v-row justify="center">
        <v-dialog
            v-model="show"
            fullscreen
            hide-overlay
            transition="dialog-bottom-transition"
        >
            <v-card>
                <v-toolbar dark color="primary">
                    <v-btn icon dark @click.stop="show = false">
                        <v-icon>mdi-close</v-icon>
                    </v-btn>
                    <v-toolbar-title>{{ partType.typeLong }}</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items>
                        <v-btn dark text @click="show = false"> Save </v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-container>
                    <v-list three-line subheader>
                        <p class="text-h5 mb-0">Select One:</p>
                        <v-subheader>
                            Available Parts: {{ partsList.count }}
                        </v-subheader>
                        <v-list-item
                            v-for="part in partsList.parts"
                            :key="part.id"
                        >
                            <v-container>
                                <v-list-group no-action>
                                    <template v-slot:activator>
                                        <v-list-item-title>
                                            {{ part.product_name }}
                                        </v-list-item-title>
                                        <v-list-item-subtitle>
                                            {{ part.manufacturer }}
                                        </v-list-item-subtitle>
                                    </template>

                                    <v-card
                                        v-for="(spec, i) in part.spec_values"
                                        :key="i"
                                        elevation="0"
                                    >
                                        <v-card-title
                                            class="my-0 py-0"
                                            v-if="
                                                spec.spec.data_type ===
                                                'boolean'
                                            "
                                        >
                                            {{ spec.spec.name }}: &nbsp;
                                            <span class="font-italic my-0 py-0">
                                                {{
                                                    Object.values(spec)[3]
                                                        ? "Yes"
                                                        : "No"
                                                }}
                                            </span>
                                        </v-card-title>
                                        <v-card-title class="my-0 py-0" v-else>
                                            {{ spec.spec.name }}: &nbsp;
                                            <span class="font-italic my-0 py-0">
                                                {{
                                                    spec.spec.unit_type
                                                        ? Object.values(
                                                              spec
                                                          )[3] +
                                                          " " +
                                                          spec.spec.unit_type
                                                        : Object.values(spec)[3]
                                                }}
                                            </span>
                                        </v-card-title>
                                    </v-card>
                                </v-list-group>
                            </v-container>
                            <v-btn elevation="2" color="secondary">
                                Select
                            </v-btn>
                        </v-list-item>
                    </v-list>
                </v-container>
            </v-card>
        </v-dialog>
    </v-row>
</template>

<script>
export default {
    data: () => ({
        lastType: "",
        partsList: {},
    }),
    methods: {
        getPartByType(type) {
            axios
                .get(`/api/component/${type}`)
                .then((response) => {
                    this.partsList = response.data;
                    console.log("Parts List: ", this.partsList);
                })
                .catch((error) => console.log(error));
        },
    },
    props: {
        value: Boolean,
        partType: Object,
    },
    computed: {
        show: {
            get() {
                if (this.value && this.partType.typeShort !== this.lastType) {
                    this.lastType = this.partType.typeShort;
                    console.log(
                        "Queried\nReceived Part Type:",
                        this.partType.typeShort,
                        "\nLast Part Searched",
                        this.lastType
                    );
                    this.getPartByType(this.partType.typeShort);
                } else if (this.value) {
                    console.log(
                        "No Query\nReceived Part Type:",
                        this.partType.typeShort,
                        "\nLast Part Searched",
                        this.lastType,
                        "\nParts List: ",
                        this.partsList
                    );
                }

                return this.value;
            },
            set(value) {
                this.$emit("input", value);
            },
        },
    },
};
</script>

<style scoped>
.v-subheader {
    align-items: baseline;
}
</style>
