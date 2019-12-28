<template>
  <main class="page-content">
    <button class="left arrow-container" v-on:click="increaseTurn">
      <font-awesome-icon icon="angle-left" />
    </button>
    <section class="intro-words">
      <p class="bigger">
        I'm a Javascript Developer &amp; Data Visualization Designer
      </p>
      <p class="medium">Check out some of my projects!</p>
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
    <button class="right arrow-container" v-on:click="decreaseTurn">
      <font-awesome-icon icon="angle-right" />
    </button>
  </main>
</template>

<script>
import Slide from "./components/Slide";

const cellSize = 210;
const numberOfCells = 12;
const tz = Math.round(cellSize / 2 / Math.tan(Math.PI / numberOfCells));
const theta = 360 / numberOfCells;
console.log({ tz });

export default {
  methods: {
    increaseTurn() {
      this.turn += 30;
    },
    decreaseTurn() {
      this.turn -= 30;
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
        name: "Bay Drift Map",
        imageURL: "images/baydrift-map-cropped.png",
        linkTo: "/bay-drift"
      },
      {
        name: "Costing Nature",
        imageURL: "images/costing-nature-cropped.png",
        linkTo: "/costing-nature"
      },
      {
        name: "Social Progress Index",
        imageURL: "images/social-progress-cropped.png",
        linkTo: "/social-progress"
      },
      {
        name: "Aves Interactive",
        imageURL: "images/aves-1.png",
        linkTo: "/aves-interactive"
      }
    ]
  })
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Karla|Rubik");

@media only screen and (max-width: 1000px) {
  button.left {
    margin-left: 25px;

    svg {
      margin-right: 2px;
    }
  }

  button.right {
    margin-right: 25px;

    svg {
      margin-left: 2px;
    }
  }
}

main.page-content {
  height: calc(100% - 200px);
  margin: 100px;
  margin-top: 20px;
  margin-bottom: 150px;
  color: black;
  font-family: "Karla";
  border-radius: 8px;
  z-index: 1000;
}

section.intro-words {
  margin-top: 15%;
  color: #232323;
  user-select: none;

  p.bigger {
    display: block;
    width: 700px;
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
  top: 70%;
  left: 50%;
  width: 200px;
  height: 210px;
  margin: 0;
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
  transition: all 2s;
  transition-timing-function: cubic-bezier(0.6, -0.1, 0.735, 0.045);

  .slide-link {
    backface-visibility: hidden;
  }

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
  top: 65%;
  z-index: 1000;
  width: 30px;
  height: 30px;
  padding: 0;
  border-radius: 15px;
  outline: none;
  background: rgba(236, 233, 242, 0.7);
  transition: all 0.5s ease-out;

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
</style>
