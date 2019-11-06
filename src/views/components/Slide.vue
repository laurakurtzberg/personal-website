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
        }),
        props: {
          rotate: {
            type: String
          }
        },
        computed: {
          style () {
            return ' color: blue ';
            // return 'transform: skew(10deg) rotateY(' + this.rotate  + ')';
          }
        }
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
	    width: 190px;
	    height: 210px;
	    border-radius: 6px;
      // overflow: hidden;
      // height: 300px;
      // width: 300px;
      // background-color: white;
      // box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
      // border: 2px solid white;
      // padding: 0px;
      // border-radius: 5px;
      // display: flex;
      // justify-content: center;
    }

    div.slide:nth-child(1) {
       background: rgba(252, 192, 77, 0.9);
       transform: rotateY(0) translateZ(182px);
    }

    div.slide:nth-child(2) {
       background: rgba(49, 192, 204, 0.9);
       transform: rotateY(120deg) translateZ(182px);
    }

    div.slide:nth-child(3) {
       background: rgba(236, 233, 242, 0.9);
       transform: rotateY(240deg) translateZ(182px);
    }

    h2 {
      font-size: 18px;
    }
</style>
