<template>
    <div>
        <div v-if="tasks['description'] ==='1'">
            <inertia-link class="fas fa-check" style="color: green"></inertia-link>
        </div>
        <div v-else>
            <inertia-link class="fas fa-check" style="color: grey"></inertia-link>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        'tasks': Array,
    }
}
</script>
