<template>
  <section class="about-me">
    <section class="intro">
      <section class="bio">
        <h2>Hey there!</h2>
        My name is Laura, and I make online things with data, art, and
        cartography. I have experience in web development, science
        communication, and digital journalism.
        <br />
        <br />
        I grew up in Arizona and Sonora before moving to Miami to pursue an
        <a href="https://interactive.miami.edu/">MFA in Interactive Media</a>
        at the University of Miami. I am an Assistant Professor at
        <a href="https://carta.fiu.edu/journalism/">Florida International
        University's <a href="">Department of Journalism and 
        Media</a> and I work on data visualization and mapping for
        <a href="https://ambiental.media/">Ambiental Media</a>.
      </section>
      <img
        class="my-portrait"
        src="../assets/profilepic.jpg"
        alt="portrait of Laura"
      />
    </section>
    <section class="resume" v-if="showResume">
      <section class="skills">
        <h3>Skills</h3>
        <ul class="technical-skills">
          <li>D3.js</li>
          <li>GIS</li>
          <li>HTML</li>
          <li>Javascript</li>
          <li>Typescript</li>
          <li>React</li>
          <li>CSS/SCSS</li>
          <li>R</li>
          <li>Python</li>
          <li>P5.js</li>
          <li>Vue.js</li>
          <li>UX Research</li>
          <li>Adobe Illustrator</li>
          <li>Styled Components</li>
          <li>Three.js</li>
          <li>Git/Github</li>
        </ul>

        <p class="languages">
          Languages: Fluent in Spanish and Portuguese, Intermediate French
        </p>
      </section>
      <section class="experience">
        <h3>Work Experience</h3>
        <section class="work-block">
          <p class="workplace">Ambiental Media</p>
          <p class="position">Freelance Data Visualization Developer</p>
          <p class="dates">April 2020 - present</p>
          <p class="location">Remote</p>
        </section>

        <section class="work-block">
          <p class="workplace">Descartes Labs</p>
          <p class="position">Front End Developer</p>
          <p class="dates">June 2018 - April 2020</p>
          <p class="location">Santa Fe, NM</p>
        </section>

        <section class="work-block">
          <p class="workplace">WLRN Public Media</p>
          <p class="position">Data Journalism Intern</p>
          <p class="dates">February 2018 - May 2018</p>
          <p class="location">Miami, FL</p>
        </section>

        <section class="work-block">
          <p class="workplace">Univision Communications Inc.</p>
          <p class="position">Fellow Digital Journalist</p>
          <p class="dates">October 2017 - February 2018</p>
          <p class="location">Miami, FL</p>
        </section>

        <section class="work-block">
          <p class="workplace">University of Miami</p>
          <p class="position">Graduate Assistant</p>
          <p class="dates">August 2016 - May 2018</p>
          <p class="location">Coral Gables, FL</p>
        </section>
      </section>

      <section class="education">
        <h3>Education</h3>

        <section class="edu-block">
          <p class="university-name">University of Miami</p>
          <p class="degree-program">Interactive Media MFA</p>
          <p class="program-details">Data Visualization track</p>
        </section>

        <section class="edu-block">
          <p class="university-name">Salzburg Media Academy of Social Change</p>
          <p class="degree-program">Fellow 2017</p>
        </section>

        <section class="edu-block">
          <p class="university-name">University of Arizona</p>
          <p class="degree-program">B.A. in Information Science and Arts</p>
          <p class="program-details">
            Honors Thesis: Data Visualization Portfolio
          </p>
        </section>
      </section>
    </section>
  </section>
</template>

<script>
export default {
  name: "AboutMe",
  data: () => ({
    title: "About Me",
    showResume: true
  })
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css?family=Karla|Rubik");

section.about-me {
  width: 90%;
  margin: auto;
  margin-top: 130px;
  margin-bottom: 100px;
  font-family: "Karla";

  h3 {
    font-size: 1.2em;
    font-weight: bold;
  }
}

section.resume {
  max-width: 800px;
  margin: auto;
  margin-top: 30px;
  background-color: rgba(255, 255, 255, 0.6);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
  text-align: left;
  border-radius: 8px;
  padding: 20px;
  color: #232323;

  ul.technical-skills {
    margin: 0;
    padding: 0;

    li {
      margin-right: 25px;
      margin-bottom: 10px;
      padding: 2px 8px 2px 8px;
      list-style: none;
      display: inline-block;
      border-radius: 4px;
      background: white;
    }
  }

  section.skills {
    width: 95%;
    margin: auto;
    margin-bottom: 50px;
  }

  section.experience {
    width: 95%;
    margin: auto;
    margin-bottom: 50px;

    section.work-block {
      margin-bottom: 20px;
      line-height: 1em;

      p.workplace {
        display: inline;
        font-weight: bold;

        &:after {
          content: "/";
          padding: 10px;
        }
      }

      p.position {
        display: inline;
      }

      p.dates {
        text-transform: uppercase;
        font-size: 0.9em;
        color: #6e6e6e;
        margin-top: 5px;
      }

      p.location {
        text-transform: uppercase;
        font-size: 0.9em;
        margin-top: -10px;
        color: #6e6e6e;
      }

      ul.description {
        margin-top: -5px;
      }
    }
  }

  section.education {
    width: 95%;
    margin: auto;
    margin-bottom: 50px;

    section.edu-block {
      margin-bottom: 30px;

      p.university-name {
        font-weight: bold;
        display: inline;

        &:after {
          content: "/";
          padding: 10px;
        }
      }

      p.degree-program {
        display: inline;
      }

      p.program-details {
        margin-top: 5px;
        text-transform: uppercase;
        font-size: 0.9em;
        color: #6e6e6e;
      }
    }
  }
}

section.intro {
  margin: auto;
  height: auto;
  max-width: 800px;
  background-color: rgba(255, 255, 255, 0.6);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
  color: black;
  text-align: left;
  display: flex;
  flex-direction: row;
  padding: 20px;
  padding-bottom: 40px;
  border-radius: 8px;
  position: relative;
  z-index: 1000;

  section.bio {
    width: 90%;
    color: black;
    text-align: left;
    margin-left: 20px;

    h2 {
      font-family: "Rubik", sans-serif;
      font-weight: bold;
      position: static;
      background: none;
      font-size: 1.2em;
      padding: 0;
    }
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

@media only screen and (max-width: 600px) {
  section.about-me {
    img.my-portrait {
      top: -135px;
    }
  }
}

@media only screen and (max-width: 1200px) {
  section.about-me {
    margin-left: auto;
    margin-top: 20px;
    padding-top: 50px;
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
    top: -120px;
  }
}
</style>
