<template>
  <nav class="global-nav">
    <ul id="nav">
      <li v-for="item in NavLinks" :key="item.name">
        <router-link class="nav-link" tag="div" :to="item.linkTo">
          {{ item.name }}
        </router-link>
      </li>
    </ul>
    <section id="social-media">
      <a href="https://twitter.com/laurakurtzberg">
        <button class="social-media-icon" title="Twitter">
          <font-awesome-icon :icon="{ prefix: 'fab', iconName: 'twitter' }" />
        </button>
      </a>
      <a href="https://www.linkedin.com/in/laurajael/">
        <button class="social-media-icon" title="LinkedIn">
          <font-awesome-icon :icon="{ prefix: 'fab', iconName: 'linkedin' }" />
        </button>
      </a>
      <a href="https://github.com/laurakurtzberg">
        <button class="social-media-icon" title="Github">
          <font-awesome-icon :icon="{ prefix: 'fab', iconName: 'github' }" />
        </button>
      </a>
      <a href="https://glitch.com/@laura.kurtzberg">
        <button class="social-media-icon" title="Glitch">
          <Glitch />
        </button>
      </a>
    </section>
  </nav>
</template>

<script>
import Glitch from "./Glitch";

export default {
  name: "Nav",
  data: () => ({
    NavLinks: [
      { name: "Home", linkTo: "/" },
      { name: "About Me", linkTo: "/about" },
      { name: "ISMPs", linkTo: "/ismp" }
    ]
  }),
  components: {
    Glitch
  }
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Karla|Rubik");
ul#nav {
  width: 200px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  font-family: "Karla", sans-serif;
  list-style: none;
  padding: 0;
  padding-bottom: 10px;
  margin: 0;
  text-align: right;
  user-select: none;

  li {
    cursor: pointer;
    transition: all 0.2s ease-out;
    display: inline-block;

    &:hover {
      color: black;
    }

    &:focus {
      color: black;
    }
  }
}

section#social-media {
  display: flex;
  flex-direction: row-reverse;

  button.social-media-icon {
    width: 30px;
    height: 30px;
    background-color: rgba(255, 255, 255, 0.9);
    border: none;
    border-radius: 15px;
    margin: 5px;
    padding: 0;
    transition: all 0.2s ease-out;

    svg {
      width: 20px;
      height: 20px;
      padding: 5px;
      color: #232323;
    }

    &:hover {
      background-color: rgba(255, 255, 255, 0.6);
    }

    &:focus {
      background-color: rgba(255, 255, 255, 0.6);
    }
  }
}

nav.global-nav {
  position: absolute;
  top: 20px;
  right: 20px;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  flex-grow: 1;
  height: 85px;
  width: calc(100% - 60px);
  margin: 0;
  padding: 30px;
  background-color: transparent;
  font-size: 0.9em;
  line-height: 1.3em;
}

@media only screen and (max-width: 1200px) {
  ul#nav {
    flex-direction: column;
  }
}

@media only screen and (max-width: 650px) {
  section#social-media {
    display: flex;
    flex-direction: column-reverse;
    align-self: flex-start;
    margin-top: -130px;
    margin-left: 20px;
  }

  ul#nav {
    flex-direction: column;
    li {
      padding-bottom: 15px;
    }
  }
}
</style>
