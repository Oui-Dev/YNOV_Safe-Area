<template>
  <div class="p-6">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="px-4 sm:px-0">
        <h3 class="text-4xl font-medium leading-6 text-gray-900">Créez un ticket de support</h3>
        <p class="mt-1 text-sm text-gray-600">Les données sont confidentielles. <br> Ne partagez pas de données personnelles ou sensibles.</p>
      </div>
      <div class="mt-5 md:col-span-2 md:mt-0">
        <form @submit.prevent="submit">
          <div class="shadow sm:overflow-hidden sm:rounded-md">
            <div class="space-y-6 bg-gray-50 px-4 py-5 sm:p-6">
              <div class="mt-1">
                <label for="title"
                       class="block text-sm font-medium text-gray-700">Sujet</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="text"
                         name="title"
                         id="title"
                         v-model="form.title"
                         class="block w-full border rounded-md  border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                         placeholder="Titre" />
                </div>
              </div>
              <div>
                <label for="description"
                       class="block text-sm font-medium text-gray-700">Description</label>
                <div class="mt-1">
                  <textarea id="description"
                            v-model="form.description"
                            name="description"
                            rows="3"
                            class="mt-1 block w-full rounded-md border border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Écrivez ici ..." />
                </div>
                <p class="mt-2 text-sm text-gray-500">Décrivez en détail votre problème ou votre demande.</p>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700">Ajoutez un document</label>
                <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6 bg-white">
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
                      <label for="fileUpload"
                             class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Upload a file</span>
                        <input id="fileUpload"
                               name="fileUpload"
                               v-on:change="form.fileUpload"
                               type="file"
                               class="sr-only" />
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-center sm:px-6">
              <button type="submit"
                      class="inline-flex justify-center rounded-md border border-transparent bg-safearea-blue py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Soumettre</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import DashboardLayout from "../../layouts/dashboard.vue";


export default {
  name: "DashboardIndex",
  layout: DashboardLayout,

  data() {
    return {
      form: this.$inertia.form({
        title: null,
        description: null,
        fileUpload: null

      }),
    }
  },

  //TODO: handle submit , handle file upload

  methods: {
    submit() {
      console.log("HEY !!!")
      console.log(title.value)
      console.log(description.value)
      console.log(fileUpload.value)

      // this.form.post(this.$route(""), {
      //   onStart: () => {
      //     this.form.clearErrors();
      //   },
      // });
    },
  },
};
</script>