<template>
    <div>
        <v-card v-for="index in 6" :key="index" elevation="3" class="my-4"
            ><v-skeleton-loader
                class="mx-auto pa-1"
                type="card-heading"
            ></v-skeleton-loader>
        </v-card>
    </div>
</template>

<script>
export default {};
</script>
