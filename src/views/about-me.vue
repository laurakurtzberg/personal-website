<template>
  <section class="about-me">
    <div class="bio">
      <h2>Hey there!</h2>
      My name is Laura, and I make online things with data, art, and
      cartography. I have experience in web development, science communication,
      and digital journalism.
      <br />
      <br />
      I grew up in Arizona and Sonora before moving to Miami to pursue an
      <a href="https://interactive.miami.edu/">MFA in Interactive Media</a>
      at the University of Miami. Nowadays I live in Santa Fe, NM where I work
      as a front end developer at
      <a href="Descarteslabs.com">Descartes Labs</a>.
    </div>
    <img
      class="my-portrait"
      src="images/profilepic.jpg"
      alt="portrait of Laura"
    />
  </section>
</template>

<script>
export default {
  name: "AboutMe",
  data: () => ({
    title: "About Me"
  })
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Karla|Rubik");

section.about-me {
  margin: auto;
  height: auto;
  margin-top: 10%;
  margin-bottom: 150px;
  width: 60%;
  max-width: 800px;
  background-color: rgba(255, 255, 255, 0.6);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
  color: black;
  text-align: left;
  display: flex;
  flex-direction: row;
  font-family: "Karla";
  padding: 20px;
  border-radius: 8px;
  position: relative;
  z-index: 1000;

  h2 {
    font-family: "Rubik", sans-serif;
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
  min-width: 220px;
  height: 220px;
  margin: 20px;
  margin-left: 30px;
  border-radius: 110px;
  border: 2px solid white;
}

a {
  text-decoration: none;
}

button.contact {
  padding: 15px;
  margin: 20px 0px 20px 0px;
  background-color: white;
  color: black;
  font-size: 1em;
  font-weight: bold;
  min-width: 100px;
  text-align: center;
  border-radius: 5px;
  display: block;
  cursor: pointer;
  outline: none;

  &:hover {
    background-color: rbga(255, 255, 255, 0.5);
  }
}

@media only screen and (max-width: 1380px) {
  section.about-me {
    width: 65%;
    margin-left: 270px;
    padding-bottom: 50px;
  }
}

@media only screen and (max-width: 1000px) {
  section.about-me {
    margin-left: auto;
    padding-top: 50px;
    padding-bottom: 40px;
    width: 80%;
    flex-direction: column;
    justify-content: center;
  }

  div.bio {
    flex-grow: 1;
  }

  img.my-portrait {
    display: block;
    min-width: 160px;
    height: 160px;
    border-radius: 80px;
    position: absolute;
    left: 50%;
    margin-left: -80px;
    top: -110px;
  }
}
</style>
