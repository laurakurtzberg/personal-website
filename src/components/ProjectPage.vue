<template>
  <main class="project-page">
    <div
      class="featured-image"
      v-bind:style="{ backgroundImage: 'url(' + imageURL + ')' }"
    ></div>
    <section class="description">
      <header>
        <h1 class="project-title">{{ title }}</h1>
        <p class="project-subtitle">{{ subtitle }}</p>
        <a v-if="link" :href="link">
          <button class="project-button">
            Check It Out
          </button>
        </a>
      </header>
      <p>
        {{ description }}
      </p>
    </section>
    <section class="tools-used">
      <p><span>Tools Used: </span>{{ tools }}</p>
    </section>
    <section class="image-carousel">
      <carousel
        :data="images"
        :controls="false"
        indicator-type="disc"
      ></carousel>
    </section>
    <section>
      <router-link class="button-link" tag="button" :to="'/'"
        ><font-awesome-icon icon="angle-left" /> Back to projects
      </router-link>
    </section>
  </main>
</template>

<script>
export default {
  name: "ProjectPage",
  props: {
    title: String,
    subtitle: String,
    link: {
      type: String,
      default: null
    },
    description: String,
    imageURL: String,
    tools: String,
    images: Array
  }
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Karla|Rubik");

$darkgrey: #232323;

button.button-link {
  border-radius: 6px;
  font-size: 0.9em;
  font-weight: normal;
  padding: 4px 8px 4px 8px;
  margin-top: 20px;
  margin-left: 0;
  font-family: "Karla", sans-serif;
  text-transform: uppercase;
  color: white;
  background: $darkgrey;
  transition: all 0.3s ease-out;

  &:hover {
    background: lighten($darkgrey, 20%);
  }

  &:focus {
    background: lighten($darkgrey, 20%);
    outline: none;
  }
}

main.project-page {
  margin: auto;
  height: auto;
  min-height: 800px;
  margin-top: 130px;
  margin-bottom: 100px;
  padding-bottom: 30px;
  width: 90%;
  max-width: 800px;
  background-color: rgba(255, 255, 255, 0.8);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
  color: black;
  text-align: left;
  font-family: "Karla";
  border-radius: 8px;
  z-index: 1000;
  position: relative;

  section {
    width: 90%;
    height: auto;
    color: black;
    text-align: left;
    margin: auto;
    padding: 10px;
    padding-left: 25px;
  }

  section.image-carousel {
    width: calc(90% - 50px);
    height: 500px;
    background: #ccc;
    border-radius: 8px;
    padding: 15px;

    div.carousel-slide {
      height: 500px;
      text-align: center;

      img {
        max-height: 450px;
        user-select: none;
        pointer-events: none;
      }

      img.smaller {
        max-width: 700px;
      }
    }
  }

  section.description {
    p {
      margin: 0;
    }

    header {
      position: relative;

      h1.project-title {
        margin-bottom: 0;
      }

      p.project-subtitle {
        margin-top: 0px;
        margin-bottom: 35px;
        font-style: italic;
      }

      button.project-button {
        position: absolute;
        top: 10px;
        right: 5px;
        width: 150px;
        padding: 15px;
        outline: none;
        border: 2px solid $darkgrey;
        border-radius: 6px;
        font-weight: bold;
        font-size: 0.8em;
        color: $darkgrey;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease-out;

        &:focus {
          outline: none;
          border-color: white;
        }

        &:hover {
          outline: none;
          border-color: #ccc;
          background: white;
        }
      }
    }
  }
}

div.featured-image {
  min-width: 100%;
  padding: 0;
  margin: 0;
  height: 350px;
  background: grey;
  background-position: center;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  border-bottom: 1px solid #ccc;
}

a {
  text-decoration: none;
}

@media only screen and (max-width: 1200px) {
  main.project-page {
    margin-top: 0px;
    max-width: 1000px;
  }

  p.project-subtitle {
    max-width: calc(100% - 165px);
  }
}

@media only screen and (max-width: 700px) {
  main.project-page section.description header button.project-button {
    position: static;
    width: 80%;
    display: block;
    margin-bottom: 30px;
    margin-top: -10px;
  }

  p.project-subtitle {
    max-width: 100%;
    margin-bottom: 0px;
    padding-bottom: 0px;
  }
}
</style>
