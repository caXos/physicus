<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';
import { ref } from 'vue'

const props = defineProps({
    date: String,
    time: String,
    id: Number,
});
</script>

<script>

</script>

<template>
    <div class="container shadow-lg shadow-orange-200 text-center text-orange-600 scale-95 hover:bg-orange-200 hover:scale-100 transition-all">
        <div class="grid grid-cols-4 mb-5 border-2 rounded border-orange-600 divide-x-2 divide-inherit items-center">
            <div class="flex rounded-full shrink justify-center">
                <img src="../../../public/img/abstract-user-flat-4.svg" style="height:50px;width:50px;">
            </div>
            <div class="grid grid-rows-2">
                <div>Nome Paciente {{ id }}</div>
                <div>{{date}} {{time}}</div>
            </div>
            <div>
                Atividade
            </div>
            <div>
                <span class="material-symbols-outlined text-color-inherit mx-1 cursor-pointer" title="Notificar Paciente {{id}}">notifications</span>
                <span class="material-symbols-outlined text-color-inherit mx-1 cursor-pointer" title="Marcar como completada">done</span>
            </div>
        </div>
    </div>
</template>

<style scoped>
</style>