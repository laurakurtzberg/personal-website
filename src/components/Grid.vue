<template>
  <div class="grid-wrapper">
    <div class="grid">
      <div class="vertical">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <div class="horizontal">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Grid"
};
</script>

<style lang="scss">
$gridLine: 2px;

html {
  width: 100%;
  height: 100%;
}

.grid-wrapper {
  position: absolute;
  width: 100%;
  height: 400px;
  left: 0;
  bottom: 0;
  perspective: 200px;
}

.grid {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  margin-top: -50px;
  transform: rotateX(45deg);
}

.line {
  position: absolute;
  background: rgba(255, 255, 255, 0.35);
  backface-visibility: hidden;
  z-index: 0;
}

.vertical .line {
  top: 0;
  left: 0;
  bottom: 0;
  width: $gridLine;
  background: linear-gradient(
    top,
    rgba(255, 255, 255, 0),
    rgba(255, 255, 255, 0.35)
  );

  &:nth-child(1) {
    left: 10%;
  }

  &:nth-child(2) {
    left: 20%;
  }

  &:nth-child(3) {
    left: 30%;
  }

  &:nth-child(4) {
    left: 40%;
  }

  &:nth-child(5) {
    left: 50%;
  }

  &:nth-child(6) {
    left: 60%;
  }

  &:nth-child(7) {
    left: 70%;
  }

  &:nth-child(8) {
    left: 80%;
  }

  &:nth-child(9) {
    left: 90%;
  }

  &:nth-child(10) {
    left: 100%;
    margin-left: -1px;
  }
}

.horizontal .line {
  top: 0;
  left: 0;
  right: 0;
  height: $gridLine;
  z-index: 2;

  &:nth-child(1) {
    top: 10%;
    opacity: 0.2;
  }

  &:nth-child(2) {
    top: 20%;
    opacity: 0.3;
  }

  &:nth-child(3) {
    top: 30%;
    opacity: 0.4;
  }

  &:nth-child(4) {
    top: 40%;
    opacity: 0.5;
  }

  &:nth-child(5) {
    top: 50%;
    opacity: 0.6;
  }

  &:nth-child(6) {
    top: 60%;
    opacity: 0.7;
  }

  &:nth-child(7) {
    top: 70%;
    opacity: 0.8;
  }

  &:nth-child(8) {
    top: 80%;
    opacity: 0.9;
  }

  &:nth-child(9) {
    top: 90%;
    opacity: 0.95;
  }

  &:nth-child(10) {
    top: 100%;
    margin-top: -1px;
    opacity: 1;
  }

  &:nth-child(11) {
    opacity: 0.05;
  }
}
</style>
