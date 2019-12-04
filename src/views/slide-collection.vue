<template>
  <div>
    <div class="left arrow-container"><font-awesome-icon icon="angle-left" /></div>
    <section class="slide-collection">
      <div
        class="slide-collection-content"
        v-bind:class="{ active: false, second: secondActive }"
        v-on:click="increaseTurn"
        v-bind:style="{ transform: 'rotateY('+ turn+'deg)' }"
      >
        <Slide />
        <Slide />
        <Slide />
        <Slide />
        <Slide />
        <Slide />
      </div>
    </section>
    <div class="right arrow-container"><font-awesome-icon icon="angle-right" /></div>
  </div>
</template>

<script>
    import Slide from './components/Slide';

    export default {
        methods: {
          increaseTurn() {
            this.turn += 20;
          }
        },
        components: {
          Slide
        },
        name: "SlideCollection",
        data: () => ({
          isActive: true,
          secondActive: false,
          turn: 0.5
        })
    }
</script>

<style lang="scss">
  @import url('https://fonts.googleapis.com/css?family=Karla|Rubik');
    div.slide-collection-content {
      position: absolute;
      width: 100%;
      height: 100%;
      transform-style: preserve-3d;
      transition: all 2s;
      // transform: translateZ(-282px) rotateY(0);
      // animation: carousel 10s infinite cubic-bezier(1, 0.015, 0.295, 1.225) forwards;
    }

    div.slide-collection-content.active {
      animation: carousel_spin_right2 2s cubic-bezier(1, 0.015, 0.295, 1.225);
      animation-fill-mode: forwards;
    }

    div.slide-collection-content.secondActive {
      animation: carousel_spin_right 2s cubic-bezier(1, 0.015, 0.295, 1.225);
      animation-fill-mode: forwards;
    }

    section.slide-collection {
      color: #232323;
      position: absolute;
	    top: 50%;
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

    .prev,
    .next {
      position: absolute;
      top: 50%;
      width: 50px;
      height: 50px;
      border: 2px solid #232323;
      color: #232323;
      border-radius: 50%;
      margin-top: -25px;
      margin-left: 25px;
      cursor: pointer;
      line-height: 48px;
      text-align: center;
      text-indent: -2px;
      transition: all 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);

      &:hover {
        background: #232323;
        color: #fff;
        transform: scale(1.2);
      }

      &:active {
        transform: translate(0, 3px) scale(1.2);
      }
    }

    .next {
      right: 0;
      margin-left: auto;
      margin-right: 25px;
      text-indent: 2px;
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

      .animated {
        transition: all 400ms;
        position: absolute;
        transform: translate(-50%, -50%);
      }

      .slide-in {
        opacity: 0;
        transform: translate(-40%, -50%);
      }

      .slide-in-active {
        transition-delay: 150ms;
      }

      .slide-out {
        opacity: 1;
      }

      .slide-out-active {
        opacity: 0;
        transform: translate(-60%, -50%);
      }
    }

    .buttons {
      position: absolute;
      top: 10px;
      left: 10px;
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
    // instead of using an animation with keyframes,
    // I can use one class for transform rotate 'forward' and
    // one class for transform rotate 'backwards'
    //
    // but then what about rotating in one direction AGAIN??
    // the class has already been assigned
    //
    // could have yet ANOTHER class name with the same animation
    // and switch between assigned .animation1 and .animation2
    @keyframes
    carousel {
      0%, 17.5% {
       transform: translateZ(-182px) rotateY(0);
      }
       27.5%, 45% {
       transform: translateZ(-182px) rotateY(-120deg);
      }
       55%, 72.5% {
       transform: translateZ(-182px) rotateY(-240deg);
      }
       82.5%, 100% {
       transform: translateZ(-182px) rotateY(-360deg);
      }
    }

    @keyframes
    carousel_spin_right {
      0%, 50% {
        transform: rotateY(-120deg);
      }
    }

    @keyframes
    carousel_spin_right2 {
      0%, 50% {
        transform: rotateY(-240deg);
      }
    }
</style>
