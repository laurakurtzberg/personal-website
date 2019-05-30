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
        <div class="social-media-icon"><font-awesome-icon :icon="{ prefix: 'fab', iconName: 'twitter' }"/></div>
        <div class="social-media-icon"><font-awesome-icon :icon="{ prefix: 'fab', iconName: 'linkedin' }"/></div>
        <div class="social-media-icon"><font-awesome-icon :icon="{ prefix: 'fab', iconName: 'github' }"/></div>
      </section>
    </footer>
</template>

<script>
    export default {
        name: "Footer",
        data: () => ({
          FooterLinks: [
            {name: 'Home', linkTo: '/'},
            {name: 'About Me', linkTo: '/about'},
            {name: 'ISMPs', linkTo: '/ismp'}
          ]
        }),
    }
</script>

<style lang="scss">
  @import url('https://fonts.googleapis.com/css?family=Karla|Rubik');
  ul#footer-nav {
    font-family: 'Karla', sans-serif;
    list-style: none;
    padding: 0;
    text-align: left;
  }

  section#social-media {
    display: flex;
    flex-direction: row;

    div.social-media-icon {
      width: 22px;
      height: 22px;
      background-color: #fff;
      border-radius: 10px;
      margin: 5px;

      svg {
        width: 16px;
        height: 16px;
        padding: 3px;
        color: #232323;
      }
    }
  }

  footer.global-footer {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-grow: 1;
    height: 70px;
    width: calc(100% - 40px);
    margin: 0;
    padding: 10px 20px 10px 20px;
    background-color: transparent;
    font-size: 14px;
  }
</style>
