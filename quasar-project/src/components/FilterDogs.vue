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
              <q-btn color="primary" label="Buscar" @click="filterDog" />
            </div>
          </q-card>
        </div>
        <div class="q-pa-md">
          <div
            v-if="
              opcion === 'raza' ||
              opcion === 'tamaño' ||
              opcion === 'color_del_pelo'
            "
          >
            <div v-if="this.columnasUnicas">
              <q-table :rows="perroFil.valores" row-key="id">
                <template v-slot:body="props">
                  <q-tr :props="props">
                    <q-td>
                      {{ props.row }}
                    </q-td>
                  </q-tr>
                </template>
              </q-table>
            </div>
            <!-- <q-table :rows="this.perros" row-key="id">
              <template v-slot:body="props">
                <q-tr :props="props">
                  <q-td v-for="columna in columnas" :key="columna.field">
                    <q-td v-if="columna.name === 'foto'">
                      <img
                        :src="`../../../../${props.row[columna.field]}`"
                        style="max-width: 100px; max-height: 100px"
                      />
                    </q-td>
                    <q-td>
                      {{ props.row[columna.field] }}
                    </q-td>
                  </q-td>
                </q-tr>
              </template>
            </q-table> -->
          </div>
          <div v-else>
            <q-table :rows="this.perros" row-key="id">
              <template v-slot:body="props">
                <q-tr :props="props">
                  <q-td v-for="columna in columnas" :key="columna.field">
                    <q-td v-if="columna.name === 'foto'">
                      <img
                        :src="`../../../../${props.row[columna.field]}`"
                        style="max-width: 100px; max-height: 100px"
                      />
                    </q-td>
                    <q-td>
                      {{ props.row[columna.field] }}
                    </q-td>
                  </q-td>
                </q-tr>
              </template>
            </q-table>
          </div>
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
      perroFil: [],
      columnas: [],
      columnasUnicas: [],
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
    filterDog() {
      axios
        .get(`http://127.0.0.1:8000/api/filtroDog/${this.filtroRaza}`)
        .then((response) => {
          console.log(response);
        });
    },

    async handleRadioClick(opcion) {
      await axios
        .get(`http://127.0.0.1:8000/api/getColum/${opcion}`)
        .then((response) => {
          this.perroFil = response.data;
          // console.log(this.perros.nombreColumna);

          // for (let i = 0; i < this.perros.length; i++) {
          //   console.log(this.perros[i]);
          // }
          // console.log(this.columnas);
          // Object.keys(this.perros[0]).map((e, index)=> {
          //   console.log()
          // })
          this.columnasUnicas = {
            name: this.perroFil.nombreColumna,
            label: this.perroFil.nombreColumna,
            align: "left",
            field: this.perroFil.nombreColumna,
          };
          // console.log(this.columnas);
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
