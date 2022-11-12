
<template>
    <div>
        <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6 bg-white"
             @dragenter.prevent="toggleActive"
             @dragleave.prevent="toggleActive"
             @dragover.prevent
             @drop.prevent="drop"
             :class="{'file-dropped': dropped, 'active-dropzone': active}">
            <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400"
                     stroke="currentColor"
                     fill="none"
                     viewBox="0 0 48 48"
                     aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                    <label for="file"
                           class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Téléchargez un fichier</span>
                    </label>
                    <p class="pl-1">ou glisser-déposer</p>
                </div>
                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                <input name="file"
                       type="file"
                       id="file"
                       class="sr-only" />
            </div>
        </div>
        <p>File: {{ dropzoneFile.name }}</p>
    </div>
</template>

<script>

import { ref } from 'vue';

export default {
    name: "dropzone",

    setup() {
        const active = ref(false);
        const dropped = ref(false);

        let dropzoneFile = ref("");

        const toggleActive = () => {
            active.value = !active.value
        };

        const drop = (e) => {
            active.value = !active.value
            dropped.value = !dropped.value
            dropzoneFile.value = e.dataTransfer.files[0]

            console.log(dropzoneFile.value)
        };

        return { active, dropped, toggleActive, drop, dropzoneFile }
    }
}
</script>

<style lang="scss" scoped>
.active-dropzone {
    @apply border-safearea-blue;
}

.file-dropped {
    @apply border-safearea-blue border-solid;
}
</style>
