<template>
    <div class="menu-wrapper">
      <div class="menu-icon" v-show="isHidden" v-on:click="isHidden = false">
        <font-awesome-icon icon="bars" />
      </div>
      <transition name="fade">
        <ul id="main-menu" v-show="!isHidden" v-on:click="isHidden = true">
          <li v-for="item in MenuLinks">
            <router-link class="menu-link" tag="div" :to="item.linkTo">
              {{ item.name }}
            </router-link>
          </li>
        </ul>
    </transition>
    </div>
</template>

<script>
    export default {
        name: "Menu",
        data: () => ({
            isHidden: true,
            MenuLinks: [
              {name: 'Home', linkTo: '/'},
              {name: 'About Me', linkTo: '/about'},
              {name: 'ISMPs', linkTo: '/ismp'} // ISMP stands for imperfect small monthly prototype
            ]
        }),
    }
</script>

<style lang="scss">
    @import url('https://fonts.googleapis.com/css?family=Karla|Rubik');
    .fade-enter-active, .fade-leave-active {
      transition: transform 0.5s;
    }

    .fade-enter, .fade-leave-to {
      opacity: 0;
      transform: scaleX(0);
    }

    div.menu-wrapper {
      position: absolute;
      top: 0px;
      right: 0px;
      cursor: pointer;
      text-align: left;
      font-family: 'Karla', sans-serif;

      div.menu-icon {
        position: absolute;
        top: 5px;
        right: 7px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        width: 40px;
        height: 40px;
        padding: 0;
        margin: 8px;

        svg {
          width: 20px;
          height: 20px;
        }
      }
    }

    ul#main-menu {
      list-style: none;
      transform-origin: top right;
      padding: 0;
      width: 120px;
      padding: 20px;
      margin-top: 15px;
      margin-right: 0px;
      background-color: rgba(225,167,215,1);
      text-transform: uppercase;
      border-radius: 8px;

      li {
        padding: 10px;
        font-size: 1.1em;
        transition: all 0.2s ease-out;
        text-align: center;
      }

      li:hover {
        font-weight: bold;
        color: black;
      }
    }
</style>
