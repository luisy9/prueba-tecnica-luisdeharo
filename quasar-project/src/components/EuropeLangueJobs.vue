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
  <div class="banner_europe">
    <div class="container px-4 text-center">
      <div class="row gx-5">
        <div class="col">
          <div class="p-3">
            Find the perfect employee in our database of more than 25,000 new
            multilingual candidates each month.
          </div>
        </div>
        <div class="col">
          <div class="p-3">Custom column padding</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import "bootstrap/dist/css/bootstrap.css";

export default defineComponent({
  name: "EssentialLink",
});
</script>

<style scoped>
nav {
  background-color: rgb(12, 56, 102);
}

.nav-link {
  color: white;
  font-size: 14px;
}

.navbar-brand {
  color: white;
}

.banner_europe::before {
  max-width: 1400px;
  margin: 0 auto;
  object-fit: cover;
  background-image: url("../assets/img.jpg");
}
</style>
