<template>
  <div class="slide" :style="style">
    <div
      class="backgroundimg"
      :style="{ backgroundImage: 'url(' + imageURL + ')' }"
    >
      <div class="content">
        <div class="top-border"></div>
        <h2>{{ title }}</h2>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Slide",
  props: ["title", "imageURL"]
};
</script>

<style lang="scss">
div.top-border {
  height: 40px;
  position: absolute;
  width: 100%;
  background: rgba(236, 233, 242, 1);
}

div.backgroundimg {
  background: rgba(236, 233, 242, 0.5);
  z-index: 0;
  background-position: center;
  background-size: cover;
  position: absolute;
  left: 0;
  top: 0;
  width: 200px;
  height: 200px;
  border-radius: 6px;
  backface-visibility: hidden;
}

div.content {
  z-index: 100;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  width: 200px;
  height: 200px;
  border-radius: 6px;
  backface-visibility: hidden;
  background: rgba(89, 118, 124, 0.5);
  box-shadow: inset 0px 0px 0px 12px rgba(236, 233, 242, 1);
  transition: background 0.3s ease-out;

  &:hover {
    background: rgba(236, 233, 242, 0.5);
    cursor: pointer;
  }

  &:focus {
    background: rgba(236, 233, 242, 0.5);
    cursor: pointer;
  }
}

div.slide {
  border-radius: 6px;
  backface-visibility: hidden;
  transition: all 0.5s ease-out;
}

h2 {
  user-select: none;
  font-size: 0.8em;
  position: relative;
  top: 150px;
  background: rgba(236, 233, 242, 1);
  padding: 12px 0px 12px 0px;
  z-index: 100;
}

@media only screen and (max-width: 700px) {
  div.slide {
    position: absolute;
    width: 300px;
    height: 300px;
  }

  div.content {
    width: 300px;
    height: 300px;
    box-shadow: inset 0px 0px 0px 20px rgba(236, 233, 242, 1);
  }

  div.backgroundimg {
    width: 300px;
    height: 300px;
  }

  h2 {
    top: 240px;
    font-size: 1em;
  }
}
</style>
