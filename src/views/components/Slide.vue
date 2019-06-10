<template>
    <div class="slide">
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
    }
</script>

<style lang="scss">
    img.backgroundimg {
      z-index: 0;
      align-self: center;
    }

    div.content {
      z-index: 100;
      padding: 10px;
    }

    div.slide {
      overflow: hidden;
      height: calc(100vh - 300px);
      width: calc(100% - 60px);
      background-color: white;
      box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
      border: 2px solid white;
      padding: 0px;
      border-radius: 5px;
      display: flex;
      justify-content: center;
    }

    h2 {
      font-size: 18px;
    }
</style>
