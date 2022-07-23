<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import AgendaCard from '@/Components/AgendaCard.vue';
import { Head } from '@inertiajs/inertia-vue3';

const props = defineProps({
    agendas: Object
});
</script>

<template>
    <Head title="Agenda" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Agenda
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- (item, index) -->
                        <AgendaCard v-for="(agenda, index) in agendas" 
                                :key="index" 
                                :date="agenda.date"
                                :time="agenda.time" />
                        <!-- <AgendaCard v-for="agenda in agendas" 
                                :key="agenda.id" 
                                :date="agenda.date"
                                :time="agenda.time" /> -->
                    </div>
                </div>
            </div>
        </div>

    </BreezeAuthenticatedLayout>
</template>
