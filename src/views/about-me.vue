<template>
    <div class="about-me">
      <img class="my-portrait" src="images/lk-pic.jpg" alt="portrait of Laura" />
      <div class="bio">
        <h2>About Me</h2>
        <span id="hi">Hi!</span> My name is Laura, and I make online things
        with data, art, and cartography. I have experience in journalism, science communication,
        interactive experiences, and web development.
        <div class="contact">
          <p class="contact-link"><a href="mailto:laura.kurtzberg@gmail.com">Contact Me</a></p>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        name: "AboutMe",
        data: () => ({
            title: 'About Me'
        }),
    }
</script>

<style lang="scss">
    @import url('https://fonts.googleapis.com/css?family=Karla|Rubik');
    div.about-me {
      margin: auto;
      height: calc(100vh - 330px);
      width: 88%;
      background-color: white;
      color: black;
      text-align: left;
      display: flex;
      min-height: 520px;
      font-family: 'Karla';
      padding: 20px;

      h2 {
        font-family: 'Rubik', sans-serif;
        font-weight: bold;
      }

      div.bio {
        color: black;
        text-align: left;
        margin-left: 20px;
      }
    }

    img.my-portrait {
      width: 320px;
      height: 480px;
      margin: 20px;
    }
</style>
