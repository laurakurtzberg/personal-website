<template>
  <main>
    <button class="left arrow-container" v-on:click="increaseTurn">
        <font-awesome-icon icon="angle-left" />
    </button>
    <span v-touch:swipe.left="increaseTurn" v-touch:swipe.right="decreaseTurn">
    <section class="slide-collection">
      <div
        class="slide-collection-content"
        v-bind:class="{ active: false, second: secondActive }"
        v-bind:style="{
          transform: 'rotateY('+ turn+'deg)',
        }"
      >
        <Slide />
        <Slide />
        <Slide />
        <Slide />
        <Slide />
        <Slide />
      </div>
    </section>
    </span>
    <button class="right arrow-container" v-on:click="decreaseTurn">
        <font-awesome-icon icon="angle-right" />
    </button>
  </main>
</template>

<script>
    import Slide from './components/Slide';

    export default {
        methods: {
          increaseTurn() {
            this.turn += 60;
          },
          decreaseTurn() {
            this.turn -= 60;
          }
        },
        components: {
          Slide
        },
        name: "SlideCollection",
        data: () => ({
          turn: 0,
          data: () => ({
              isHidden: true,
              Projects: [
                {name: 'Plant Friend', linkTo: '/plantfriend'},
                {name: 'Airline Fuel Cost', linkTo: '/airlinefuel'},
                {name: 'Floresta Silenciosa', linkTo: '/floresta'},
                {name: 'CARTHE Map', linkTo: '/carthe'},
                {name: 'Fires in the Amazon', linkTo: '/amazonfires'},
                {name: 'Social Progress Index', linkTo: '/socialprogress'},
              ]
          }),
        })
    }
</script>

<style lang="scss">
    @import url('https://fonts.googleapis.com/css?family=Karla|Rubik');
    main {
      width: 100%;
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
    }

    @media only screen and (max-width: 1000px) {
      button.left {
        margin-left: 25px;
      }

      button.right {
        margin-right: 25px;
      }
    }

    section.slide-collection {
      color: #232323;
      position: absolute;
      z-index: 100;
	    top: 52%;
	    left: 50%;
	    width: 250px;
	    height: 210px;
	    margin: 0;
	    perspective: 800px;
	    transform: translate(-50%, -50%);
      font-family: 'Karla', sans-serif;

      h1, h2, h3 {
        font-family: 'Rubik', sans-serif;
        text-transform: uppercase;
      }
    }

    div.slide-collection-content {
      position: absolute;
      width: 100%;
      height: 100%;
      transform-style: preserve-3d;
      transition: all 2s;
      transition-timing-function: cubic-bezier(0.6, -0.1, 0.735, 0.045);
    }

    button.arrow-container {
      position: absolute;
      top: 50%;
      z-index: 1000;
      width: 30px;
      height: 30px;
      padding: 0;
      border-radius: 15px;
      transition: all 0.5s ease-out;
      outline: none;

      svg {
        fill: #232323;
        width: 25px;
        height: 25px;
      }

      &:hover {
        background: grey;
      }
    }

    .left {
      margin-right: -28px;
      left: 0;
      margin-left: calc(50% - 400px);
    }

    .right {
      margin-left: -28px;
      right: 0;
      margin-right: calc(50% - 400px);
    }

    .slides {
      font-size: 40px;
      display: flex;
      height: 100%;
      align-items: center;
      justify-content: center;
      font-weight: bold;

      @media (min-width: 600px) {
        font-size: 80px;
      }

      @media (min-width: 900px) {
        font-size: 140px;
      }
    }

    button {
      padding: 10px;
      outline: none;
      border: none;
      -webkit-appearance: none;
      background: #232323;
      color: #fff;
      font-weight: bold;
      font-size: 18px;
      cursor: pointer;

      &:disabled {
        opacity: 0.2;
        cursor: no-drop;
      }
    }

</style>
