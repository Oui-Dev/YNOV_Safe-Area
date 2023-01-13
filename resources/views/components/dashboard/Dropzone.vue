<script setup>
import { ref, watch } from 'vue';
import { DocumentPlusIcon, TrashIcon } from '@heroicons/vue/24/outline';

const emits = defineEmits(['file']);
const props = defineProps({
	description: {
		type: String,
		required: false,
		default: "PNG, JPG, GIF, jusqu'à 10Mo"
	},
	icon: {
		type: Function,
		required: false,
		default: DocumentPlusIcon
	}
});

const hovered = ref(false);
const dropped = ref(false);
const dropzoneFile = ref(null);
const toggleHovered = () => { hovered.value = !hovered.value; };

watch(dropzoneFile, () => {
	emits('file', dropzoneFile.value);
});

function drop(e) {
	hovered.value = false;
	dropped.value = true;
	dropzoneFile.value = e.dataTransfer.files[0];
}

function selectFile(e) {
	dropzoneFile.value = e.target.files[0];
	hovered.value = false;
	dropped.value = true;
}

function removeFile() {
	dropzoneFile.value = null;
	dropped.value = false;
}
</script>

<template>
	<section :class="{ 'file-dropped': dropped, 'hover-dropzone': hovered }"
					 @dragenter.prevent="toggleHovered"
					 @dragleave.prevent="toggleHovered"
					 @dragover.prevent
					 @drop.prevent="drop">
		<div class="space-y-1 text-center h-24 justify-center content-center flex">
			<div v-if="!dropzoneFile">
				<component :is="icon"
									 class="mx-auto h-12 w-12 text-gray-400"
									 aria-hidden="true" />
				<div class="flex text-sm mt-2 text-gray-600 justify-center">
					<label for="file"
								 class="relative cursor-pointer rounded-md m-0 bg-white font-medium text-safearea-blue focus-within:outline-none focus-within:ring-2 focus-within:ring-safearea-red focus-within:ring-offset-2 hover:text-safearea-red">
						<span>Téléchargez un fichier</span>
					</label>
					<p class="pl-1 text-sm text-gray-500">ou glisser-déposer</p>
				</div>
				<p class="text-xs text-gray-500">{{ description }}</p>
				<input name="file"
							 type="file"
							 id="file"
							 class="sr-only"
							 @change="selectFile" />
			</div>
			<div v-else
					 class="flex items-center justify-center gap-2">
				<TrashIcon class="h-8 w-8 p-1 text-red-500 cursor-pointer"
									 @click="removeFile" />
				<p class="flex text-sm text-gray-600">{{ dropzoneFile.name }}</p>
			</div>
		</div>
	</section>
</template>

<style lang="scss" scoped>
section {
	@apply mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6 bg-white;

	.hover-dropzone {
		@apply border-safearea-blue;
	}

	.file-dropped {
		@apply border-solid border-safearea-blue;
	}
}
</style>