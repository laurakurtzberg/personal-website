<template>
    <div class="slide">
      <h2>{{ slideTitle }}</h2>
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
    div.slide {
      height: calc(100vh - 300px);
      width: calc(100% - 60px);
      background-color: white;
      padding: 10px;
      border-radius: 0px;
    }

    h2 {
      font-size: 18px;
    }
</style>
