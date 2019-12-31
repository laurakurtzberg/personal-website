<template>
  <section class="page-content">
    <section class="sidebar">
      <img class="name-logo" src="images/laura-jael.svg" alt="Laura Jael" />
    </section>

    <router-view></router-view>

    <Grid />
    <Nav />
  </section>
</template>

<script>
import Grid from "./components/Grid";
import Nav from "./components/Nav";

export default {
  components: {
    Grid,
    Nav
  },
  name: "main-content",
  data: () => ({
    // reactive data property of the component.
    tagline: "data visualization and information designer"
  })
};
</script>

<style lang="scss">
/*
     * Fonts
    */

@import url("https://fonts.googleapis.com/css?family=Karla|Rubik");

/*
     * Global Styles
    */
$darkgrey: #232323;

html,
body {
  margin: 0;
  padding: 0;
  font-family: "Karla", sans-serif;
}

h1 {
  font-size: 2em;
  font-family: "Rubik", sans-serif;
  line-height: 2em;
  margin: 25px 0px 25px 0px;
}

h2 {
  font-family: "Rubik", sans-serif;
  font-weight: bold;
}

h3 {
  font-weight: normal;
  font-size: 16px;
  color: $darkgrey;
}

:focus {
  outline: none;
}
::-moz-focus-inner {
  border: 0;
}

section.page-content {
  position: absolute;
  height: auto;
  min-height: 100%;
  width: 100%;
  overflow: hidden;
  margin: 0;
  padding: 0;
  text-align: center;
  font-family: sans-serif;
  color: white;
  background: rgb(89, 118, 124);
  background: linear-gradient(
    180deg,
    rgba(89, 118, 124, 1) 0%,
    rgba(151, 207, 220, 1) 20%,
    rgba(196, 202, 230, 1) 40%,
    rgba(225, 167, 215, 1) 60%,
    rgba(237, 141, 202, 1) 80%,
    rgba(211, 160, 191, 1) 100%
  );
}

section.sidebar {
  position: absolute;
  left: 20px;
  top: 0;
  width: 200px;

  img.name-logo {
    user-select: none;
    pointer-events: none;
    padding: 20px;
    max-width: 180px;
    z-index: 100;
    margin-top: 20px;
  }
}

@media only screen and (max-width: 1200px) {
  section.sidebar {
    position: static;
    width: 100%;
    height: 220px;
    text-align: center;

    img.name-logo {
      margin-top: 20px;
      width: 150px;
    }
  }
}
</style>
