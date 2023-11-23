<template>
  <div class="">
    <nav class="navbar navbar-expand-lg custom-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Inicio <span class="sr-only">Jobs</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link px-4" href="#">Candidates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#">For Employes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#">Career Advice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4" href="#">Log in/Sing up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="">
    <div class="box">
      <div class="banner_europe">
        <div class="">
          <div class="container">
            <div class="text-center">
              <div class="container px-4 text-center">
                <div class="row gx-5">
                  <div class="col-md-6 order-md-2">
                    <div class="col">
                      <div class="p-3">Custom column paddingsss</div>
                    </div>

                    <div class="col">
                      <div class="p-3">Custom column padding</div>
                    </div>

                    <div class="col">
                      <div class="p-3">Custom column padding</div>
                    </div>
                  </div>

                  <div class="col-md-6 order-md-1 d-md-block">
                    <div class="p-3">
                      <h1 class="title">
                        Find the perfect employee in our database of more than
                        25,000 new multilingual candidates each month.
                      </h1>
                      <button class="btn btn-light" type="button">
                        POST A JOB
                      </button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="pt-5">
                    <q-carousel
                      v-model="slide"
                      animated
                      arrows
                      infinite
                      autoplay
                      autoplay-interval="3000"
                      style="max-width: 100%; background: transparent"
                    >
                      <q-carousel-slide>
                        <img
                          src="../assets/apple.svg"
                          alt="Apple Icon"
                          style="
                            max-width: 50px;
                            max-height: 50px;
                            margin: auto;
                          "
                        />
                      </q-carousel-slide>
                      <q-carousel-slide>
                        <img
                          src="../assets/apple.svg"
                          alt="Apple Icon"
                          style="
                            max-width: 50px;
                            max-height: 50px;
                            margin: auto;
                          "
                        />
                      </q-carousel-slide>
                      <q-carousel-slide>
                        <img
                          src="../assets/apple.svg"
                          alt="Apple Icon"
                          style="
                            max-width: 50px;
                            max-height: 50px;
                            margin: auto;
                          "
                        />
                      </q-carousel-slide>

                      <q-carousel-slide>
                        <q-icon
                          name="apple"
                          size="3em"
                          class="text-black"
                        ></q-icon>
                      </q-carousel-slide>
                    </q-carousel>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <h2 class="titleELJs text-center pt-5">
      ELJ's <strong>hiring solutions</strong>
    </h2>
    <div class="d-flex justify-content-center p-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col-3 px-4">
          <div class="col text-center">
            <img src="../assets/job-posting.svg" alt="" />
          </div>
          <div class="col text-center pt-2">
            <span class="text-hiring">JOB POSTING</span>
          </div>
        </div>
        <div class="col-3 px-4">
          <div class="col text-center">
            <img src="../assets/cv-search.svg" alt="" />
          </div>
          <div class="col text-center pt-2">
            <span class="text-hiring">CV SEARCH</span>
          </div>
        </div>
        <div class="col-3 px-4">
          <div class="col text-center">
            <img src="../assets/exposure-features.svg" alt="" />
          </div>
          <div class="col text-center pt-2">
            <span class="text-hiring">WEBSITE <br />VISIBILITY</span>
          </div>
        </div>
        <div class="col-3 px-4">
          <div class="col text-center">
            <img src="../assets/outreach-features.svg" alt="" />
          </div>
          <div class="col text-center pt-2">
            <span class="text-hiring">OUTREACH FEATURES</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div
        class="text-center col-12"
        style="padding: 50px 0; background-color: #007cc0"
      >
        <span class="" style="color: #fff; font-size: 22px"
          >Find more about our basic and personalized hiring solutions</span
        >
        <button class="btn btn-light button-learmore" type="button">
          LEARN MORE
        </button>
      </div>
    </div>
  </div>
  <div class="">
    <div class="row">
      <div class="col-12 pt-5">
        <h2 class="text-center pt-5 titleELJs">
          <strong>Tell us about</strong> your needs!
        </h2>
        <q-form>
          <q-input label="Nombre" outlined dense required />
          <q-input label="Email" outlined dense type="email" required />
          <q-input label="Contraseña" outlined dense type="password" required />
          <q-input label="Descripción" outlined dense textarea />
          <q-checkbox label="Aceptar condiciones legales" />
          <q-btn
            type="submit"
            color="primary"
            label="Enviar Mensaje"
            class="q-mt-md"
          />
        </q-form>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent, ref } from "vue";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-icons/font/bootstrap-icons.css";

export default defineComponent({
  name: "EssentialLink",
  setup() {
    return {
      slide: ref(1),
    };
  },
});
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lato&display=swap");

* {
  font-family: "Lato", sans-serif;
}

strong {
  text-align: right;
}

.text-hiring {
  font-family: Lato;
  font-weight: 700;
  color: #0c3866;
  font-size: 19px;
}
.span {
  display: table-cell;
  padding-left: 30px;
  color: #fff;
  vertical-align: middle;
}

nav {
  background-color: rgb(12, 56, 102);
}

.text-start {
  text-align: left;
  font-size: 22px;
  font-weight: 500;
  color: #fff;
  letter-spacing: 1.96px;
  margin-top: 50px;
}

button {
  color: rgb(12, 56, 102);
  border-radius: 30px;
  font-weight: 700;
  font-size: 16px;
  text-transform: uppercase;
  padding: 15px 75px;
  /* margin-top: 30px; */
}

.button-learmore {
  color: rgb(12, 56, 102);
  border-radius: 30px;
  font-weight: 700;
  font-size: 16px;
  text-transform: uppercase;
  padding: 5px 60px;
  margin-left: 30px;
}

.nav-link {
  color: white;
  font-size: 14px;
}

.navbar-brand {
  color: white;
}

.box {
  width: 100%;
  height: 400px;
  position: relative;
}

.banner_europe {
  /* max-height: auto; */
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 100%;
  position: relative;
  background-image: url("../assets/bannerEurope.jpg");
}

.banner_europe::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /* background-color: rgb(64,146,199); */
  background-color: rgba(3, 82, 134, 0.685);
}

.container {
  /* transform: translate(-50%, -50%); */
  color: white;
  z-index: 999;
  /* position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
  z-index: 1; */
}

.banner-container {
  padding-top: 20px;
  padding-bottom: 80px;
}

.title {
  text-align: left;
  font-family: Lato, sans-serif;
  font-size: 22px;
  font-weight: 500;
  color: #fff;
  letter-spacing: 1.96px;
  margin-top: 50px;
}

.titleELJs {
  font-size: 22px;
  color: #0c3866;
}

.text-info {
  /* margin-top: 30px; */
  text-align: start;
  margin-top: 50px;
}

.numCompanies {
  font-size: 24px;
  font-weight: 1000;
}

.textCompanies {
  font-size: 18px;
  font-weight: 1;
}

.item-list {
  display: table;
  margin-top: 40px;
}

.div-carrusel {
  margin-top: 200px;
}
</style>
