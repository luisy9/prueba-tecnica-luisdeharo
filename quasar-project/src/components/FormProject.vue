<template>
  <div class="q-pa-md" style="max-width: 400px; margin: auto">
    <q-container class="q-gutter-md">
      <h3>Añade un perro</h3>
      <q-form @submit="submitForm">
        <div
          v-if="msgSuccess"
          class="positive"
        >
          {{ msgSuccess }}
        </div>
        <q-uploader
          v-model="uploadedImage"
          accept=".jpg, .jpeg, .png"
          :max-files="1"
          label="Sube tu imagen del perro"
          @added="onFileAdded"
        >
          <template v-slot:files="slotProps">
            <q-uploader-file
              v-if="slotProps.files.length > 0"
              :file="slotProps.files[0]"
              :remove-file="slotProps.removeFile"
              removable
              square
              flat
            >
              <q-avatar
                v-if="slotProps.files.length > 0"
                :src="slotProps.files[0].url"
              />
            </q-uploader-file>
          </template>
        </q-uploader>

        <q-input v-model="raza" label="Raza" outlined dense class="q-mt-md" />

        <q-input
          v-model="tamaño"
          label="Tamaño"
          outlined
          dense
          class="q-mt-md"
        />

        <q-input
          v-model="colorPelo"
          label="Color de pelo"
          outlined
          dense
          class="q-mt-md"
        />

        <q-btn type="submit" color="primary" label="Enviar" class="q-mt-md" />
      </q-form>
    </q-container>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      uploadedImage: null,
      files: null,
      raza: "",
      tamaño: "",
      colorPelo: "",
      msgSuccess: null,
    };
  },
  methods: {
    onFileAdded(files) {
      console.log(files);
      this.files = files;
    },

    submitForm() {
      let formData = new FormData();
      formData.append("raza", this.raza);
      formData.append("tamaño", this.tamaño);
      formData.append("colorPelo", this.colorPelo);
      formData.append("foto", this.files[0]);

      axios
        .post("http://127.0.0.1:8000/api/saveDog", formData)
        .then((response) => {
          this.msgSuccess = response.data.message;
        })
        .catch((error) => {
          console.error("Error en la solicitud:", error);
        });
    },
  },
};
</script>

<style scoped>
.positive {
  color: #155724; 
  background-color: #d4edda;
  border: 1px solid #c3e6cb;
  border-radius: 0.25rem;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
}
</style>
