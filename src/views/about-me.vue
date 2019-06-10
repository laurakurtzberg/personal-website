<template>
    <div class="about-me">
      <div class="bio">
        <h2>Hey!</h2>
        My name is Laura, and I make online things
        with data, art, and cartography. I have experience in journalism, science communication,
        interactive experiences, and web development.
        <br>
        <br>
        I grew up in Arizona and Sonora before moving to Miami to pursue an MFA in Interactive Media.
        Nowadays I live in Santa Fe, NM where I work as a front end developer at Descartes Labs.
        <div class="contact">
          <a href="mailto:laura.kurtzberg@gmail.com">Contact Me</a>
        </div>
      </div>
      <img class="my-portrait" src="images/lk-pic.jpg" alt="portrait of Laura" />
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
      height: calc(100% - 500px);
      margin-top: 50px;
      width: 60%;
      max-width: 800px;
      background-color: rgba(255,255,255,0.6);
      box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
      color: black;
      text-align: left;
      display: flex;
      flex-direction: row;
      font-family: 'Karla';
      padding: 20px;
      border-radius: 5px;

      h2 {
        font-family: 'Rubik', sans-serif;
        font-weight: bold;
      }

      div.bio {
        width: 90%;
        color: black;
        text-align: left;
        margin-left: 20px;
      }
    }

    img.my-portrait {
      flex-grow: 0;
      width: 300px;
      height: 300px;
      margin: 20px;
      border-radius: 150px;
      border: 2px solid white;
    }

    div.contact {
      padding: 15px;
      margin: 20px 0px 20px 0px;
      background-color: white;
      width: 100px;
      text-align: center;
      border-radius: 5px;

      a {
        text-decoration: none;
      }
    }

    @media only screen and (max-width: 900px) {
      div.about-me {
        padding-top: 50px;
        width: 80%;
        flex-direction: column;
        justify-content: center;
        margin-top: 180px;
      }

      div.bio {
        flex-grow: 1;
      }

      img.my-portrait {
        display: block;
        width: 200px;
        height: 200px;
        border-radius: 100px;
        position: absolute;
        left: 50%;
        margin-left: -100px;
        top: 180px;
      }

    }
</style>
