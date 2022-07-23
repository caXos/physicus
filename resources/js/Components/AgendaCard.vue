<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';
import { ref } from 'vue'

const props = defineProps({
    date: String,
    time: String,
});
</script>

<script>

</script>

<template>
    <div class="container shadow-lg shadow-orange-200 text-center hover:bg-orange-200 hover:scale-y-125 transition-all">
        <div class="grid grid-cols-4 mb-5 border-2 rounded border-orange-600 divide-x-2 divide-inherit items-center">
            <div class="rounded-full shrink">Foto</div>
            <div class="grid grid-rows-2">
                <div>Nome</div>
                <div>{{date}} {{time}}</div>
            </div>
            <div>
                Atividade
            </div>
            <div>
                Ações
            </div>
        </div>
    </div>
</template>

<style scoped>
</style>