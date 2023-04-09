<script setup>
import { computed, ref } from 'vue';
import { EyeIcon, EyeSlashIcon } from '@heroicons/vue/24/outline';

const emits = defineEmits(['update:modelValue']);
const props = defineProps({
    title: {
        type: String,
        required: true
    },
    modelValue: {
        type: String,
        required: true
    },
    type: {
        type: String,
        required: false,
        default: 'text',
        validator(value) {
            return ['text', 'email', 'password', 'number', 'search', 'tel', 'url'].includes(value)
        }
    },
    placeholder: {
        type: String,
        required: false,
        default: null
    },
    error: {
        type: String,
        required: false,
        default: null
    },
    disabled : {
        type: Boolean,
        required: false,
        default: false
    }
});

const inputType = ref(props.type);
const id = computed(() => {
    // slug the title and add random string to avoid duplicate ids
    const slug = props.title.toLowerCase().replace(/\s/g, '-');
    const randomizer = Math.random().toString(36).substring(2, 9);
    return `${randomizer}-${slug}`;
});

const updateValue = (event) => emits('update:modelValue', event.target.value);

const updatePasswordState = () => {
    inputType.value = inputType.value === 'password' ? 'text' : 'password';
};
</script>

<template>
    <div :class="['pt-3 relative', {'form-error-div': error}]">
        <label :for="id">{{ title }}</label>
        <input
            :id="id"
            :type="inputType"
            :placeholder="placeholder"
            :value="modelValue"
            :disabled="disabled"
            @input="updateValue"
        >
        <span class="absolute bottom-0 right-4 -translate-y-1/2" @click.prevent="updatePasswordState">
            <EyeIcon v-if="type === 'password' && inputType === 'password'"/>
            <EyeSlashIcon v-else-if="type === 'password' && inputType === 'text'"/>
        </span>
        <div v-if="error" class="form-error-field">{{ error }}</div>
    </div>
</template>

<style lang="scss" scoped>
label {
    @apply block mb-2 mt-3 text-sm font-medium text-gray-900;
}

input {
    @apply block w-full rounded-md border-gray-300 shadow-sm focus:border-safearea-red focus:ring-safearea-red sm:text-sm border py-3 px-3;

    &:focus {
        @apply border-safearea-blue;
    }
    &:disabled {
        @apply bg-gray-200;
    }
}

svg{
    @apply cursor-pointer h-6 w-6 text-gray-500;
}
</style>
