<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    date: String,
    time: String,
    id: Number,
});

const form = useForm({
    date: '',
    time: '',
    pacient: '',
    activity: '',
    notify: false,
});

const submit = () => {
    // form.post(route('login'), {
    //     onFinish: () => form.reset('password'),
    // });
};
</script>

<script>

</script>

<template>
    <div id="add-agenda-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    onClick="function () {$('#add-agenda-modal').hide();};">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Fechar</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Adicionar novo Compromisso</h3>
                    <form @submit.prevent="submit">
                        <div>
                            <BreezeLabel for="date" value="Data" />
                            <BreezeInput id="date" type="date" class="mt-1 block w-full" v-model="form.date" required
                                autofocus />
                        </div>

                        <div class="mt-4">
                            <BreezeLabel for="time" value="Horário" />
                            <BreezeInput id="time" type="time" class="mt-1 block w-full" v-model="form.time"
                                required />
                        </div>

                        <div class="mt-4">
                            <BreezeLabel for="pacient" value="Paciente" />
                            <BreezeInput id="pacient" type="pacient" class="mt-1 block w-full" v-model="form.pacient"
                                required />
                        </div>
                        <div class="mt-4">
                            <BreezeLabel for="activity" value="Atividade" />
                            <BreezeInput id="activity" type="activity" class="mt-1 block w-full" v-model="form.activity"
                                required />
                        </div>

                        <div class="block mt-4">
                            <label class="flex items-center">
                                <BreezeCheckbox name="notify" v-model:checked="form.notify" />
                                <span class="ml-2 text-sm text-gray-600">Notificar paciente</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            
                            <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                                Salvar
                            </BreezeButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
</style>
