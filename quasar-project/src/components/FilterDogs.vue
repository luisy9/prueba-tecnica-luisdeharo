<template>
  <q-layout>
    <q-header elevated> </q-header>

    <q-page-container>
      <q-page>
        <div class="q-pa-md fil">
          <q-card class="q-pa-md">
            <h5 style="text-align: center">¿Por qué quieres filtrar?</h5>
            <div class="q-gutter-sm radios">
              <q-radio
                v-model="opcion"
                val="raza"
                label="Raza"
                @click="handleRadioClick(opcion)"
              />
              <q-radio
                v-model="opcion"
                val="tamaño"
                label="Tamaño"
                @click="handleRadioClick(opcion)"
              />
              <q-radio
                v-model="opcion"
                val="color_del_pelo"
                label="Color de Pelo"
                @click="handleRadioClick(opcion)"
              />
            </div>
            <div class="q-gutter-sm radios">
              <q-input
                v-model="filtroRaza"
                label="Filtrar la raza"
                @input="dogSearch"
                outlined
                dense
              />
              <q-btn color="primary" label="Buscar" />
            </div>
          </q-card>
        </div>
        <div class="q-pa-md">
          <q-table :rows="this.perros" row-key="id">
            <template v-slot:body="props">
              <q-tr :props="props">
                <q-td v-for="columna in columnas" :key="columna.field">
                  <q-td v-if="columna.name === 'foto'">
                    {{ console.log(`${props.row[columna.field]}`) }}
                    <img
                      :src="`../../../../${props.row[columna.field]}`"
                      style="max-width: 100px; max-height: 100px"
                    />
                  </q-td>
                  <q-td v-else>
                    {{ props.row[columna.field] }}
                  </q-td>
                </q-td>
              </q-tr>
            </template>
          </q-table>
        </div>
      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      filtroRaza: "",
      filtroTamaño: "",
      filtroPelo: "",
      opcion: "",
      perros: [],
      columnas: [],
    };
  },

  mounted() {
    axios.get("http://127.0.0.1:8000/api/getDogs").then((response) => {
      this.perros = response.data;
      if (this.perros.length > 0) {
        this.columnas = Object.keys(this.perros[0]).map((e) => ({
          name: e,
          label: e,
          align: "left",
          field: e,
        }));
      }
    });
  },

  methods: {
    dogSearch() {},

    handleRadioClick(opcion) {
      axios.get(`http://127.0.0.1:8000/api/getDog/${opcion}`).then((response) => {
        this.perros = response.data;
        if (this.perros.length > 0) {
          this.columnas = Object.keys(this.perros[0]).map((e) => ({
            name: e,
            label: e,
            align: "left",
            field: e,
          }));
        }
      });
    },
  },
};
</script>

<style scoped>
.fil {
  max-width: 600px;
  margin: 0 auto;
}

.radios {
  display: flex;
  justify-content: center;
}

h5 {
  margin: 1rem;
}
</style>
