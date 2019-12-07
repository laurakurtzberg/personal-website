<template>
    <div class="slide rotated" :style="style">
      <img class="backgroundimg" src="images/abstract-list-is-empty.png" alt="placeholder image" />
      <div class="content">
        <h2>{{ slideTitle }}</h2>
      </div>
    </div>
</template>

<script>
    export default {
        name: "Slide",
        data: () => ({
            slideTitle: 'My Project'
        })
    }
</script>

<style lang="scss">
    img.backgroundimg {
      z-index: 0;
      align-self: center;
      width: 190px;
	    height: 210px;
      display: none;
    }

    div.content {
      z-index: 100;
    }

    div.slide {
      position: absolute;
	    top: 0;
	    left: 0;
	    width: 250px;
	    height: 250px;
	    border-radius: 6px;
      backface-visibility: hidden;
      background: rgba(236, 233, 242, 1);
    }

    div.slide:nth-child(1) {
       transform: rotateY(0) translateZ(282px);
    }

    div.slide:nth-child(2) {
       transform: rotateY(60deg) translateZ(282px);
    }

    div.slide:nth-child(3) {
       transform: rotateY(120deg) translateZ(282px);
    }

    div.slide:nth-child(4) {
       transform: rotateY(180deg) translateZ(282px);
    }

    div.slide:nth-child(5) {
       transform: rotateY(240deg) translateZ(282px);
    }

    div.slide:nth-child(6) {
       transform: rotateY(300deg) translateZ(282px);
    }

    h2 {
      font-size: 18px;
    }
</style>
