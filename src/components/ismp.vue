<template>
  <section class="ismp">
    <h2>ISMPs</h2>
    <h3 class="subtitle">Imperfect Small Monthly Projects</h3>

    <p>
      ISMPs are small projects I do for fun to learn something new, test out a
      new library I heard about, or try out an idea without the pressure of
      having to make it perfect. You can see the projects I've been working on
      <a href="https://glitch.com/@laura.kurtzberg/ism-ps">here</a>.
    </p>
    <p>
      (I just started this idea so there aren't any projects yet. More coming
      soon!)
    </p>
  </section>
</template>

<script>
export default {
  name: "ISMP",
  data: () => ({
    title: "ISMP"
  })
};
</script>

<style lang="scss">
section.ismp {
  margin: auto;
  height: auto;
  margin-top: 130px;
  margin-bottom: 100px;
  width: 60%;
  max-width: 800px;
  background-color: rgba(255, 255, 255, 0.6);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
  color: black;
  text-align: left;
  font-family: "Karla";
  padding: 20px;
  border-radius: 8px;
  position: relative;
  z-index: 1000;

  h2 {
    font-family: "Rubik", sans-serif;
    font-weight: bold;
    position: static;
    background: none;
    font-size: 1.2em;
    padding: 0;
  }
}

@media only screen and (max-width: 1200px) {
  section.ismp {
    margin-top: 0px;
  }
}
</style>
