<template>
    <div class="menu-wrapper">
      <div class="menu-icon" v-show="isHidden" v-on:click="isHidden = !isHidden"><font-awesome-icon icon="bars" /></div>
      <div class="menu-icon" v-show="!isHidden" v-on:click="isHidden = !isHidden"><font-awesome-icon icon="times" /></div>
      <transition name="fade">
        <ul id="main-menu" v-if="!isHidden">
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
              {name: 'ISMPs', linkTo: '/ismp'}
            ]
        }),
    }
</script>

<style lang="scss">
    @import url('https://fonts.googleapis.com/css?family=Karla|Rubik');
    .fade-enter-active, .fade-leave-active {
      transition: all .5s;
    }

    .fade-enter, .fade-leave-to {
      opacity: 0;
      transform: scaleY(0);
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
        top: 0px;
        right: 0px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        width: 40px;
        height: 40px;
        padding: 0;
        margin: 8px;

        svg {
          width: 15px;
          height: 15px;
        }
      }
    }

    ul#main-menu {
      list-style: none;
      transform-origin: top right;
      padding: 0;
      width: 100px;
      height: 80px;
      padding: 20px;
      margin-top: 15px;
      margin-right: 20px;
      background-color: rgba(225,167,215,1);
      text-transform: uppercase;

      li {
        padding: 5px;
        font-size: 14px;
      }

      li:hover {
        background-color: grey;
      }
    }
</style>
