<template>
    <v-sheet class="pa-3 mb-4">
        <p class="text-h6 secondary--text mb-0">
            {{ parts[type].name }}
        </p>
        <v-divider></v-divider>
        <div v-for="(part, i) in parts[type].list" :key="i">
            <p class="mt-3 mb-1">
                {{ part.product_name }}
                by
                {{ part.manufacturer }}
            </p>
            <v-sheet color="grey darken-3" elevation="3" class="pa-3">
                <div v-for="(spec, i) in part.spec_values" :key="i">
                    <p
                        class="mb-0 py-1"
                        v-if="spec.spec.data_type === 'boolean'"
                    >
                        {{ spec.spec.name }}:
                        <span class="font-italic">
                            {{ Object.values(spec)[1] ? "Yes" : "No" }}
                        </span>
                    </p>
                    <p class="mb-0 py-1" v-else>
                        {{ spec.spec.name }}:
                        <span class="font-italic">
                            {{
                                spec.spec.unit_type
                                    ? Object.values(spec)[1] +
                                      " " +
                                      spec.spec.unit_type
                                    : Object.values(spec)[1]
                            }}
                        </span>
                    </p>
                </div>
            </v-sheet>
        </div>
    </v-sheet>
</template>

<script>
export default {
    props: ["parts", "type"],
};
</script>

<style></style>
