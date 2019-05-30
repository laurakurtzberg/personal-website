<template>
    <section class="slide-collection">
      <div class="left arrow-container"><font-awesome-icon icon="angle-left" /></div>
      <Slide />
      <div class="right arrow-container"><font-awesome-icon icon="angle-right" /></div>
    </section>
</template>

<script>
    import Slide from './components/Slide';

    export default {
        components: {
          Slide
        },
        name: "SlideCollection"
    }
</script>

<style lang="scss">
  @import url('https://fonts.googleapis.com/css?family=Karla|Rubik');
    section.slide-collection {
      color: #232323;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Karla', sans-serif;

      h1, h2, h3 {
        font-family: 'Rubik', sans-serif;
        text-transform: uppercase;
      }

      .left {
        margin-right: -28px;
      }

      .right {
        margin-left: -28px;
      }

      div.arrow-container {
        z-index: 100;
        width: 30px;
        height: 30px;

        svg {
          fill: #232323;
          width: 25px;
          height: 25px;
        }
      }
    }
</style>
