<template>
  <main class="page-content">
    <section class="intro-words">
      <transition name="fade">
        <button
          v-if="turn < 60"
          class="left arrow-container"
          v-on:click="increaseTurn"
        >
          <font-awesome-icon icon="angle-left" />
        </button>
      </transition>
      <p class="bigger">
        I'm a Javascript Developer &amp;
        Data Visualization Designer
      </p>
      <p class="medium">Check out some of my projects!</p>
      <transition name="fade">
        <button
          v-if="turn > -60"
          class="right arrow-container"
          v-on:click="decreaseTurn"
        >
          <font-awesome-icon icon="angle-right" />
        </button>
      </transition>
    </section>
    <span v-touch:swipe.left="increaseTurn" v-touch:swipe.right="decreaseTurn">
      <section class="slide-collection">
        <div
          class="slide-collection-content"
          v-bind:style="{
            transform: 'rotateY(' + turn + 'deg)'
          }"
        >
          <router-link
            v-for="(project, index) in Projects"
            :key="project.name + index"
            class="slide-link"
            tag="div"
            :to="project.linkTo"
          >
            <keep-alive>
              <Slide
                v-bind:title="project.name"
                v-bind:imageURL="project.imageURL"
              />
            </keep-alive>
          </router-link>
        </div>
      </section>
    </span>
  </main>
</template>

<script>
import Slide from "./Slide";

/* Can use these lines to calculate theta
const cellSize = 210;
const numberOfCells = 12;
const tz = Math.round(cellSize / 2 / Math.tan(Math.PI / numberOfCells));
const theta = 360 / numberOfCells;
*/

export default {
  methods: {
    increaseTurn() {
      this.turn += 30;
    },
    decreaseTurn() {
      this.turn -= 30;
    },
    handleResize() {
      if (window.innerWidth <= 700) {
        this.turn = 0;
      }
    }
  },
  components: {
    Slide
  },
  name: "SlideCollection",
  data: () => ({
    turn: 0,
    Projects: [
      {
        name: "Silent Forest",
        imageURL: "images/Floresta-Silenciosa.jpg",
        linkTo: "/floresta-silenciosa"
      },
      {
        name: "Plant Friend",
        imageURL: "images/zuzu-cropped.jpg",
        linkTo: "/plant-friend"
      },
      {
        name: "Airline Fuel Cost",
        imageURL: "images/airline-fuel-cropped.png",
        linkTo: "/airline-fuel"
      },
      {
        name: "Social Progress Idx",
        imageURL: "images/social-progress-cropped.png",
        linkTo: "/social-progress"
      },
      {
        name: "Costing Nature",
        imageURL: "images/costing-nature-cropped.png",
        linkTo: "/costing-nature"
      },
      {
        name: "Bay Drift Map",
        imageURL: "images/baydrift-map-cropped.png",
        linkTo: "/bay-drift"
      },
      {
        name: "Aves Interactive",
        imageURL: "images/aves-1.png",
        linkTo: "/aves-interactive"
      }
    ]
  }),
  // bind event handlers to the `handleResize` method (defined in methods)
  mounted: function() {
    window.addEventListener("resize", this.handleResize);
  },
  beforeDestroy: function() {
    window.removeEventListener("resize", this.handleResize);
  }
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Karla|Rubik");

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}

main.page-content {
  min-height: 800px;
  margin-top: 20px;
  color: black;
  font-family: "Karla";
  border-radius: 8px;
  z-index: 1000;
  display: flex;
  flex-direction: column;
  align-items: center;
}

section.intro-words {
  color: #232323;
  user-select: none;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 25vh;

  p.bigger {
    display: block;
    width: 900px;
    margin: auto;
    font-size: 3em;
    font-weight: bold;
  }

  p.medium {
    font-size: 1.5em;
  }
}

section.slide-collection {
  color: #232323;
  position: absolute;
  z-index: 100;
  margin-top: 200px;
  left: 50%;
  width: 200px;
  height: 210px;
  perspective: 2000px;
  transform: translate(-50%, -50%);
  font-family: "Karla", sans-serif;

  h1,
  h2,
  h3 {
    font-family: "Rubik", sans-serif;
    text-transform: uppercase;
  }
}

div.slide-collection-content {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  transition: all 0.6s ease-out;

  .slide-link:nth-child(1) {
    transform: rotateY(0deg) translateZ(392px);
  }
  .slide-link:nth-child(2) {
    transform: rotateY(30deg) translateZ(392px);
  }
  .slide-link:nth-child(3) {
    transform: rotateY(60deg) translateZ(392px);
  }
  .slide-link:nth-child(4) {
    transform: rotateY(90deg) translateZ(392px);
  }
  .slide-link:nth-child(5) {
    transform: rotateY(300deg) translateZ(392px);
  }
  .slide-link:nth-child(6) {
    transform: rotateY(330deg) translateZ(392px);
  }
  .slide-link:nth-child(7) {
    transform: rotateY(270deg) translateZ(392px);
  }
}

button.arrow-container {
  position: absolute;
  margin-top: 500px;
  z-index: 1000;
  width: 30px;
  height: 30px;
  padding: 0;
  border-radius: 15px;
  outline: none;
  background: rgba(236, 233, 242, 0.7);
  transition: all 0.3s ease-out;

  svg {
    color: #232323;
    width: 30px;
    height: 30px;
  }

  &:hover {
    background: rgba(255, 255, 255, 1);
  }

  &:focus {
    background: rgba(255, 255, 255, 1);
  }
}

.left {
  margin-right: -28px;
  left: 0;
  margin-left: calc(50% - 500px);
}

.right {
  margin-left: -28px;
  right: 0;
  margin-right: calc(50% - 500px);
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
  color: rgba(236, 233, 242, 0.8);
  font-weight: bold;
  font-size: 18px;
  cursor: pointer;

  &:disabled {
    opacity: 0.2;
    cursor: no-drop;
  }
}

@media only screen and (max-width: 1200px) {
  section.intro-words {
    margin-top: -20px;
    font-size: 0.9em;
    width: 100%;

    p.bigger {
      width: 100%;
      min-width: 600px;
      margin: 0;
    }
  }
}

@media only screen and (max-width: 1000px) {
  main.page-content {
    margin: 0;
  }

  p.bigger {
    width: 90%;
  }

  button.arrow-container {
    height: 50vh;
    border-radius: 8px;
    background: rgba(255, 255, 255, 1);

    &:hover {
      background: rgba(255, 255, 255, 0.8);
    }

    &:focus {
      background: rgba(255, 255, 255, 0.8);
    }
  }

  button.left {
    margin-left: 0px;

    svg {
      margin-right: 2px;
    }
  }

  button.right {
    margin-right: 0px;

    svg {
      margin-left: 2px;
    }
  }
}

@media only screen and (max-width: 700px) {
  br.responsive-break {
    display: none;
  }

  button.arrow-container {
    display: none;
  }

  main.page-content {
    margin: 0;
    position: relative;
    height: auto;
    z-index: 1000;
  }

  section.intro-words {
    font-size: 0.7em;

    p.bigger {
      width: 90%;
      margin: 0;
      min-width: 90%;
    }

    p.medium {
      width: 100%;
    }
  }

  section.slide-collection {
    position: static;
    height: auto;
    width: 100%;
    transform: none;
    margin-top: 20px;
  }

  div.slide-collection-content {
    position: static;
    height: auto;
    transform: none;

    .slide-link {
      position: static;
      width: 300px;
      height: 300px;
      margin: auto;
      margin-bottom: 20px;
    }
    .slide-link:nth-child(1) {
      transform: none;
    }
    .slide-link:nth-child(2) {
      transform: none;
    }
    .slide-link:nth-child(3) {
      transform: none;
    }
    .slide-link:nth-child(4) {
      transform: none;
    }
    .slide-link:nth-child(5) {
      transform: none;
    }
    .slide-link:nth-child(6) {
      transform: none;
    }
    .slide-link:nth-child(7) {
      transform: none;
    }
  }
}
</style>
