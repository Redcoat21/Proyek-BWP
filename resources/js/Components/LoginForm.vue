<script  setup>

import TextBox from "@/Components/TextBox.vue";
import {useForm} from "@inertiajs/vue3";
import CourseraButton from "@/Components/CourseraButton.vue";

defineProps({
    errors: Object
});

const form = useForm({
    username: '',
    password: ''
});

</script>

<template>
    <div class="w-1/2">
        <form @submit.prevent="form.post(route('auth.login'))">
            <div class="my-1 px-2">
                <TextBox
                    v-on:model-changed="args => { form.username = args }"
                    type="text"
                    placeholder="Masukkan username anda"
                    label="USERNAME"
                    label-class="block text-sm my-2"
                    input-class="p-1.5 border w-full"
                    :binding="form.username"
                    identifier="username"
                />
                <p class="text-red-600">{{ form.errors.username }}</p>
            </div>
            <div class="my-1 px-2">
                <TextBox
                    v-on:model-changed="args => { form.password = args }"
                    type="password"
                    placeholder="Masukkan password anda"
                    label="PASSWORD"
                    label-class="block text-sm my-2"
                    input-class="p-1.5 border w-full"
                    :binding="form.password"
                    identifier="password"
                />
                <p class="text-red-600">{{ form.errors.password }}</p>
            </div>
            <div class="my-1 px-2">
                <CourseraButton class="w-full hover:bg-blue-900 my-2">
                    Login
                </CourseraButton>
            </div>
        </form>
    </div>
</template>
