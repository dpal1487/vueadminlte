<script setup>
import Login from './Auth/Login.vue';
import Dashboard from './Dashboard.vue';
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

</script>

<template>
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50" v-if="canLogin">
        <div v-if="$page.props.auth.user">
            <Dashboard />
        </div>
        <div v-else>
            <Login />
        </div>
    </div>
</template>
