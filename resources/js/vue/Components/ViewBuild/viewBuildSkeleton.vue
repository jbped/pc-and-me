<template>
    <div>
        <v-skeleton-loader type="heading"></v-skeleton-loader>
        <v-skeleton-loader
            type="text"
            class="mt-3"
            width="200"
        ></v-skeleton-loader>
        <v-divider class="mb-4"></v-divider>
        <v-skeleton-loader type="heading" class="mb-4"></v-skeleton-loader>
        <v-sheet class="pa-3 mb-4">
            <v-skeleton-loader
                type="text"
                class="mt-3"
                width="150"
            ></v-skeleton-loader>
            <v-skeleton-loader type="text" class="mt-3"></v-skeleton-loader>
            <v-skeleton-loader
                type="text"
                class="mt-6"
                width="150"
            ></v-skeleton-loader>
            <v-skeleton-loader
                type="paragraph"
                class="mt-3"
            ></v-skeleton-loader>
        </v-sheet>
        <v-skeleton-loader type="heading" class="mb-4"></v-skeleton-loader>
        <v-sheet class="pa-3 mb-4">
            <v-skeleton-loader
                type="paragraph@4"
                class="mt-3"
            ></v-skeleton-loader>
        </v-sheet>
    </div>
</template>
<script>
export default {};
</script>
