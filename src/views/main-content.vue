<template>
    <section class="homepage-content">
      <img class="name-logo" src="images/laura-jael.svg" alt="Laura Jael" />

      <Menu />
      <router-view></router-view>

      <Grid />
      <Footer />
    </section>
</template>

<script>
    import Menu from './components/Menu';
    import Grid from './components/Grid';
    import Footer from './components/Footer';

    export default {
        components: {
          Menu,
          Grid,
          Footer
        },
        name: "main-content",
        data: () => ({
            // reactive data property of the component.
            tagline: 'data visualization and information designer'
        }),
    }
</script>

<style lang="scss">
    /*
     * Fonts
    */
    @font-face {
      font-family: 'Vegan Style Personal Use';
      src: url('../assets/fonts/VeganStyleFont.eot');
      src: url('../assets/fonts/VeganStyleFont.eot?#iefix') format('embedded-opentype'),
        url('../assets/fonts/VeganStyleFont.woff') format('woff'),
        url('../assets/fonts/VeganStyleFont.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    @import url('https://fonts.googleapis.com/css?family=Karla|Rubik|Meddon');

    /*
     * Global Styles
    */
    html, body {
      margin: 0;
      padding: 0;
      font-family: 'Karla', sans-serif;
    }
    section.homepage-content {
      min-height: 100%;
      margin: 0;
      padding: 0;
      position: absolute;
      width: 100%;
      text-align: center;
      font-family: sans-serif;
      color: white;
      background: rgb(89,118,124);
      background: linear-gradient(180deg, rgba(89,118,124,1) 0%, rgba(151,207,220,1) 20%, rgba(196,202,230,1) 40%, rgba(225,167,215,1) 60%, rgba(237,141,202,1) 80%, rgba(211,160,191,1) 100%);

      .name-logo {
        padding: 20px;
        max-width: 200px;
        z-index: 100;
      }

      h1 {
        font-size: 55px;
        font-family: 'Vegan Style Personal Use', sans-serif;
        text-shadow: 2px 2px #232323;
        line-height: 55px;
        margin: 35px 0px 25px 0px;

        span.top-logo {
          display: block
        }

        span.top-logo::first-letter {
          font-size: 60px;
          font-family: 'Meddon', sans-serif;
          text-shadow: 2px 2px #232323;
        }
      }

      h3 {
        font-weight: normal;
        font-size: 16px;
        color: #232323;
      }
    }
</style>
