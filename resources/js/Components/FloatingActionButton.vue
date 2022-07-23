<script setup>
import { computed } from 'vue';

const props = defineProps(['model', 'acao']);

const model = computed(() => 'Adicionar '+props.model);
const acao2 = computed(() => props.acao);
</script>

<template>
    <div class="w-10 h-10 fixed bottom-5 right-5 rounded-full bg-orange-400 cursor-pointer hover:scale-125" :title="model" :click="acao2">
        <span class="material-symbols-outlined text-orange-200 pl-2 pt-2">add</span>
    </div>
</template>
