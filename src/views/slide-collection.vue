<template>
  <div>
    <section class="slide-collection">
      <div class="left arrow-container"><font-awesome-icon icon="angle-left" /></div>
      <Slide />
      <div class="right arrow-container"><font-awesome-icon icon="angle-right" /></div>
    </section>
    <div class="slides">
      <transition-group
        name="slide"
        mode="out-in"
        enter-class="slide-in"
        leave-class="slide-out"
        enter-active-class="animated slide-in-active"
        leave-active-class="animated slide-out-active"
      >
        <div
          v-for="index in slides"
          v-if="index == active"
          :key="index"
        >
          Slide {{ index }}
        </div>
      </transition-group>
    </div>
    <span
      class="prev"
      @click="move(-1)"
    >
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </span>
    <span
      class="next"
      @click="move(1)"
    >
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </span>
    <ul class="dots">
      <li
        v-for="(dot, index) in slides"
        :class="{ active: ++index === active }"
        @click="jump(index)"
      ></li>
    </ul>
  </div>
</div>
</template>

<script>
    import Slide from './components/Slide';

    export default {
        data: {
          slides: 3,
          active: 1
        },
        methods: {
          move(amount) {
            let newActive
            const newIndex = this.active + amount;
            if (newIndex > this.slides) newActive = 1;
            if (newIndex === 0) newActive = this.slides;
            this.active = newActive || newIndex;
          },
          jump(index) {
            this.active = index;
          },
          addSlide() {
            this.slides = this.slides + 1;
          },
          removeSlide() {
            this.slides = this.slides - 1;
          }
        },
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

    .dots {
      position: fixed;
      display: block;
      width: 100%;
      text-align: center;
      bottom: 20px;

      li {
        width: 6px;
        height: 6px;
        border-radius: 3px;
        background: #232323;
        opacity: 0.2;
        display: inline-block;
        margin: 0 3px;
        cursor: pointer;
        transition: opacity 0.4s ease-in-out,width 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);

        &.active {
          width: 22px;
          opacity: 1;
        }
      }
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
</style>
