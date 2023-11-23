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
                label="Filtra..."
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
              (buttonClicked && opcion === '') || opcion === '' || opcion === ''
            "
          >
            <q-card
              v-for="perFiltrado in perrosFiltrado"
              :key="perFiltrado.id"
              class="my-card"
            >
              <img :src="`../../../${perFiltrado.foto}`" />

              <q-card-section>
                <div class="text-h6">Raza: {{ perFiltrado.raza }}</div>
                <div class="text-subtitle2">
                  Tamaño: {{ perFiltrado.tamaño }}
                </div>
                <div class="text-subtitle2">
                  Color del Pelo: {{ perFiltrado.color_del_pelo }}
                </div>
              </q-card-section>
            </q-card>
          </div>
          <div
            v-if="
              opcion === 'raza' ||
              opcion === 'tamaño' ||
              (opcion === 'color_del_pelo' && buttonClicked === false)
            "
          >
            <div>
              <q-card
                v-for="perroFi in perroFil.valores"
                :key="perroFi.id"
                class="my-card"
              >
                <img :src="`../../../${perroFi.foto}`" />

                <q-card-section>
                  <div class="text-h6">
                    {{ perroFil.nombreColumna }} {{ perroFi }}
                  </div>
                </q-card-section>
              </q-card>
            </div>
          </div>
          <div v-else>
            <div v-if="perros.length > 0 && buttonClicked === false">
              <q-card v-for="perro in perros" :key="perro.id" class="my-card">
                <img :src="`../../../${perro.foto}`" />

                <q-card-section>
                  <div class="text-h6">Raza: {{ perro.raza }}</div>
                  <div class="text-subtitle2">Tamaño: {{ perro.tamaño }}</div>
                  <div class="text-subtitle2">
                    Color del Pelo: {{ perro.color_del_pelo }}
                  </div>
                </q-card-section>
              </q-card>
            </div>
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
      perrosFiltrado: [],
      perroFil: [],
      columnas: [],
      columnasUnicas: [],
      found: false,
      requerido: null,
      buttonClicked: false,
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
      if (this.filtroRaza.trim() === "") {
        this.requerido = true;
      } else {
        this.perrosFiltrado = [];
        this.perros.forEach((e) => {
          Object.keys(e).forEach((v) => {
            if (e[v] === this.filtroRaza) {
              this.found = true;
              this.perrosFiltrado.push(e);
            }
          });
        });
        this.buttonClicked = true;
        console.log(this.perrosFiltrado);
      }
    },

    async handleRadioClick(opcion) {
      await axios
        .get(`http://127.0.0.1:8000/api/getColum/${opcion}`)
        .then((response) => {
          this.perroFil = response.data;
          this.columnasUnicas = {
            name: this.perroFil.nombreColumna,
            label: this.perroFil.nombreColumna,
            align: "left",
            field: this.perroFil.nombreColumna,
          };
          console.log(this.columnas, "hhhhhhhh");
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
