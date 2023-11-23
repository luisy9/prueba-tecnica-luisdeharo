<template>
  <header>
    <nav class="navbar navbar-expand-lg custom-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img
            src="../assets/logo-elj-white.svg"
            style="height: auto; width: 60px"
        /></a>
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
              <a class="nav-link" href="#"><span class="sr-only">Jobs</span></a>
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
  </header>
  <div class="box">
    <div class="banner_europe">
      <!-- <h1>hola</h1> -->
      <div class="row">
        <div class="col-6"><h1>Hola</h1></div>
        <div class="col-6"><h1>Hola</h1></div>
      </div>
    </div>

    <div class="row">
      <div class="pt-5">
        <!-- <q-carousel
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
                      </q-carousel> -->
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
    <div class="row pb-5">
      <div class="col-12 pt-5">
        <h2 class="text-center pt-5 pb-5 titleELJs">
          <strong>Tell us about</strong> your needs!
        </h2>

        <div class="row">
          <div
            class="col-md-6 col-xs-12 offset-md-3 form-container"
            style="background-color: #f4f4f4; padding: 30px"
          >
            <q-form>
              <div class="row">
                <div class="col-md-6 col-xs-12 block-fields">
                  <div
                    class="q-field row no-wrap items-start q-mb-lg q-field-responsive q-field-no-label"
                  >
                    <q-input label="Your name" />
                    <q-input label="Company name" type="text" required />
                    <q-input label="Email" type="email" required />
                  </div>
                </div>
                <div class="col-md-6 col-xs-12 block-fields">
                  <q-input label="Descripción" textarea />
                  <div class="">
                    <div class="row col">
                      <div class="q-field-content col-xs-12 col-sm">
                        <div class="q-pa-md">
                          <div class="q-gutter-sm">
                            <q-checkbox
                              v-model="orange"
                              label="I accept the Legal Conditions"
                              color="orange"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <q-btn
                    type="submit"
                    rounded
                    label="SEND MESSAGE"
                    class="q-mt-md button-form"
                  />
                </div>
              </div>
            </q-form>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid pt-4">
      <h2 class="text-center pt-5 titleELJs">
        <strong>ATS Partners & API Solutions</strong>
      </h2>
      <div class="container">
        <div
          id="carouselExample"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="d-flex justify-content-between">
                <img
                  src="../assets/hrlink.svg"
                  class="d-block w-20"
                  alt="Image 1"
                />
                <img
                  src="../assets/equest.png"
                  class="d-block w-20"
                  alt="Image 2"
                />
                <img
                  src="../assets/recruitly.png"
                  class="d-block w-20"
                  alt="Image 3"
                />
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="d-flex justify-content-between"
                data-bs-interval="2000"
              >
                <img
                  src="../assets/hrlink.svg"
                  class="d-block w-20"
                  alt="Image 4"
                />
                <img
                  src="../assets/lever.png"
                  class="d-block w-20"
                  alt="Image 5"
                />
                <img
                  src="../assets/logicmelon.svg"
                  class="d-block w-20"
                  alt="Image 6"
                />
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="row pt-5">
        <div
          class="text-center col-12"
          style="padding: 50px 0; background-color: #007cc0"
        >
          <span class="fs-2" style="color: #fff"
            >Together, your hires, our goal!</span
          >
        </div>
      </div>
      <div class="container-fluid" style="background-color: #ebeff3">
        <hr
          style="
            box-sizing: content-box;
            height: 0;
            overflow: visible;
            color: #0c3866;
            height: 1px;
          "
        />
        <footer class="container">
          <div class="">
            <div
              class="row row-cols-1 row-cols-sm-2 row-cols-md-5 border-top py-5"
            >
              <div class="col-2 mb-3 mx-5">
                <p style="color: #0c3866"><b>FOR JOB SEEKERS</b></p>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                </ul>
              </div>
              <div class="col-2 mb-3 mx-5">
                <p style="color: #0c3866"><b>FOR JOB SEEKERS</b></p>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <p style="color: #0c3866" class="pt-4">
                    <b>STAY CONNECTED</b>
                  </p>
                  <li>
                    <a>hola</a>
                    <a>hola</a>
                    <a>hola</a>
                  </li>
                </ul>
              </div>
              <div class="col mb-3 mx-5">
                <p style="color: #0c3866"><b>FOR JOB SEEKERS</b></p>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <p style="color: #0c3866" class="pt-4">
                    <b>DOWNLOAD THE APP</b>
                  </p>
                  <li>
                    <a>hola</a>
                    <a>hola</a>
                    <a>hola</a>
                  </li>
                </ul>
              </div>
              <div class="col mb-3 mx-5">
                <p style="color: #0c3866"><b>FOR JOB SEEKERS</b></p>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                  <li class="nav-item mb-2">
                    <a class="nav-link p-0 text-muted">Find a Job</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- row row-cols-1 row-cols-sm-2 row-cols-md-5 border-top py-5 -->
        </footer>
        <hr
          style="
            box-sizing: content-box;
            height: 0;
            overflow: visible;
            color: #0c3866;
            height: 1px;
          "
        />
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
      orange: ref(false),
    };
  },
});
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lato&display=swap");

.app {
  width: 100%;
  min-height: 100vh;
}

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

.button-form {
  background: #517091;
  color: #fff;
  border-radius: 30px;
  font-weight: 700;
  font-size: 13px;
  text-transform: uppercase;
  padding: 5px 30px;
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
  max-height: auto;
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 100%;
  position: relative;
  background-image: url("../assets/bannerEurope.jpg");
}

.banner_europe::before {
  /* content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%; */
  /* background-color: rgb(64,146,199); */
  /* background-color: rgba(3, 82, 134, 0.685); */
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

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}
</style>
