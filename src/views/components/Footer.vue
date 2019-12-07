<template>
    <footer class="global-footer">
      <ul id="footer-nav">
        <li v-for="item in FooterLinks">
          <router-link class="footer-link" tag="div" :to="item.linkTo">
            {{ item.name }}
          </router-link>
        </li>
      </ul>
      <section id="social-media">
        <button class="social-media-icon" title="Twitter"><font-awesome-icon :icon="{ prefix: 'fab', iconName: 'twitter' }"/></button>
        <button class="social-media-icon" title="LinkedIn"><font-awesome-icon :icon="{ prefix: 'fab', iconName: 'linkedin' }"/></button>
        <button class="social-media-icon" title="Github"><font-awesome-icon :icon="{ prefix: 'fab', iconName: 'github' }"/></button>
        <button class="social-media-icon" title="Glitch"><Glitch /></button>
      </section>
    </footer>
</template>

<script>
    import Glitch from './Glitch';

    export default {
        name: "Footer",
        data: () => ({
          FooterLinks: [
            {name: 'Home', linkTo: '/'},
            {name: 'About Me', linkTo: '/about'},
            {name: 'ISMPs', linkTo: '/ismp'}
          ]
        }),
        components: {
          Glitch
        },
    }
</script>

<style lang="scss">
  @import url('https://fonts.googleapis.com/css?family=Karla|Rubik');
  ul#footer-nav {
    font-family: 'Karla', sans-serif;
    list-style: none;
    padding: 0;
    text-align: left;

    li {
      cursor: pointer;
      transition: all 0.2s ease-out;

      &:hover {
        color: black;
      }
    }
  }

  section#social-media {
    display: flex;
    flex-direction: row-reverse;

    button.social-media-icon {
      width: 31px;
      height: 30px;
      background-color: rgba(255, 255, 255, 0.9);
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
    }
  }

  footer.global-footer {
    position: absolute;
    bottom: 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-grow: 1;
    height: 70px;
    width: calc(100% - 60px);
    margin: 0;
    padding: 30px;
    background-color: transparent;
    font-size: 1em;
  }
</style>
