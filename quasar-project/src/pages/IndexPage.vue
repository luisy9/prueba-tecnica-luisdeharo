<template>
  <FormProject />
</template>

<script>
import { defineComponent } from "vue";
import FormProject from "src/components/FormProject.vue";

export default defineComponent({
    name: "IndexPage",
    FormProject,
    components: { FormProject }
});
</script>
