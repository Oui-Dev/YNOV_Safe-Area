
<template>
    <div>
        <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6 bg-white"
            @dragenter.prevent="toggleActive" @dragleave.prevent="toggleActive" @dragover.prevent @drop.prevent="drop"
            :class="{'file-dropped': dropped, 'active-dropzone': active}">
            <div class="space-y-1 text-center h-24 justify-center content-center flex">
                <div v-if="!dropzoneFile">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                        aria-hidden="true">
                        <path
                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600 justify-center">
                        <label for="file"
                            class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Téléchargez un fichier</span>
                        </label>
                        <p class="pl-1 text-sm text-gray-500">ou glisser-déposer</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF, jusqu'à 10MB</p>
                    <input name="file" type="file" id="file" class="sr-only" @change="selectFile" />
                </div>
                <div v-if="dropzoneFile" class="flex items-center justify-center">
                    <svg class="h-6 w-6 mx-2 cursor-pointer" viewBox="0 0 20 20" @click="removeFile">
                        <path fill="red"
                            d="M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306">
                        </path>
                    </svg>
                    <p class="flex text-sm text-gray-600">{{ dropzoneFile.name }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

/*
|---------------------------------------------------------------------------------------
| Component Dropzone that can be used in any form to upload a file with drag and drop
| Emits an event with the file when a file is selected or dropped
|---------------------------------------------------------------------------------------
|  Dropzone Component example - VueJS
|
|  <dropzone @file="myMethod" />
|
*/

import { ref } from 'vue';

export default {
    emits: ['file'],
    name: "dropzone",
    setup(props, context) {
        const active = ref(false);
        const dropped = ref(false);

        let dropzoneFile = ref("");

        const toggleActive = () => {
            active.value = !active.value;
        };

        const drop = (e) => {
            active.value = false;
            dropped.value = true;
            dropzoneFile.value = e.dataTransfer.files[0];
            context.emit('file', dropzoneFile.value);
        };

        const selectFile = (e) => {
            dropzoneFile.value = e.target.files[0];
            active.value = false;
            dropped.value = true;
            context.emit('file', dropzoneFile.value);
        };

        const removeFile = () => {
            dropzoneFile.value = null;
            dropped.value = false;
            context.emit('file', null);
        };

        return { active, dropped, toggleActive, drop, dropzoneFile, selectFile, removeFile }
    }
}
</script>

<style lang="scss" scoped>
.active-dropzone {
    @apply border-safearea-blue;
}

.file-dropped {
    @apply border-transparent;
}
</style>
