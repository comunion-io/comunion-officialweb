
<template>

  <div id="app-stage" :class="isTheGate ? 'is-the-gate' : ''">

    <!-- <canvas ref="canvas"></canvas> -->
    <div class="orbit-plough">
    </div>
    <div class="orbit-sp-star">
    </div>
    <section class="stage-cont">
      <!-- <div class="sun"></div>   -->

      <!-- <article class="mercury">
        <div></div>
      </article> -->
      <article class="venus">
        <div></div>
      </article>
      <article class="earth">
        <div></div>
      </article>
      <article class="mars">
        <div></div>
      </article>
      <article class="jupiter">
        <div></div>
      </article>
      <article class="saturn">
        <div></div>
      </article>
      <!-- <article class="uranus">
        <div></div>
      </article>
      <article class="neptune">
        <div></div>
      </article> -->

    </section>

  </div>

</template>

<script>
import { mapState } from 'vuex'

import { States, Actions, Events, Sizes } from '../../constants'

// import Carousel from '../../factories/visuals/carousel'

import Projects from '../../factories/visuals/projects'

import Sample from '../../factories/visuals/sample'

import Post from '../../factories/post'

import Commons from '../mixins/Commons'

import meta from '../../meta'

export default {
  name: 'AppStage',

  mixins: [Commons],

  data () {
    return {
      visuals: [],

      dragvalue: 0,

      timeline: null,

      postactive: true,

      transforms: {},

      prev: -1,

      next: 0
    }
  },

  watch: {
    $route (to, from) {
      console.log(to, from, 'route...')
      // this.update( to, from )
    }
  },
  created () {
    console.log(this.$route, '*****')
  },
  computed: {
    isTheGate () {
      return this.$route.fullPath === '/projects/the-gate'
    }
  },
  methods: {
    resize () {
      if (!this.renderer) return

      let width = window.innerWidth
      let height = window.innerHeight

      this.renderer.setSize(width, height)

      this.camera.aspect = width / height

      this.camera.updateProjectionMatrix()

      this.post.width = this.renderer.domElement.width

      this.post.height = this.renderer.domElement.height
    }
  },

  mounted () {}
}
</script>

<style lang="scss">
#app-stage {
  position: absolute;

  top: 0;
  left: 0;
  bottom: 0;
  right: 0;

  overflow: hidden;

  z-index: 1;
}
.stage-cont {
  position: relative;
  top: 40%;
  left: 25%;
  opacity: 0.5;
}

.is-the-gate .stage-cont{
  left: 0;
  top: 50%;
}

@media (max-width: map-get($sizes, custom) - 1) {
  .stage-cont, .is-the-gate .stage-cont {
    left: 0;
    opacity: 0.3;
  }
}
$planet-names: mercury, venus, earth, mars, jupiter, saturn, uranus, neptune;

$planet-diameter: 0.4878, 1.2104, 1.276, 0.97, 2.84, 1.95, 1.812, 1.753;

$orbit-time: 10.88, 20.25, 30.6525, 60.87, 130.46475, 70.74875, 60.81, 20.6625;
//days devided by 100

$planet-colors: #a1a1a1, #f5cc96, #495391, #fff5ba, #4775af, #dab37a, #c4eaed,
  #6393e5;

html {
  background: black;
  font-size: 10px;
}

%center {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
}

article {
  border-radius: 50%;
  border: 0.1em solid rgba(white, 0.2);
  height: 30em;
  @extend %center;
  position: absolute;
  transition: 1s transform ease-in-out;
  width: 30em;

  section:hover &:before {
    background: black;
    color: #ccc;
    position: absolute;
    left: 50%;
    margin-left: -2rem;
    text-align: center;
    top: -0.6rem;
    width: 4rem;
  }

  div {
    border-radius: 50%;
    height: 100%;
    position: relative;
    width: 100%;

    &:after {
      border-radius: 50%;
      background: blue;
      box-shadow: inset 0 0.4rem 0.8rem rgba(black, 0.2),
        inset 0 -0.4rem 0.4rem rgba(white, 0.2);
      content: '';
      left: 50%;
      height: 3em;
      margin-left: -1.5em;
      position: absolute;
      top: -1.5em;
      width: 3em;
    }
  }
}

// .saturn div:after {
//   box-shadow: 0 0 0 0.1em #000, 0 0 0.1em 0.5em #8f6200,
//     inset 0 0.4rem 0.8rem rgba(black, 0.2),
//     inset 0 -0.4rem 0.4rem rgba(white, 0.2);
// }

@for $i from 1 through length($planet-names) {
  .#{nth($planet-names, $i)} {
    height: $i * 6rem;
    width: $i * 6rem;

    // section:hover &:before {
    //   content: "#{nth($planet-names, $i)}";
    // }

    div {
      animation: orbit nth($orbit-time, $i) + s linear infinite;
    }

    $half: -0.5rem;

    div:after {
      background: nth($planet-colors, $i);
      height: nth($planet-diameter, $i) + rem;
      margin-left: nth($planet-diameter, $i) * $half;
      top: nth($planet-diameter, $i) * $half;
      width: nth($planet-diameter, $i) + rem;
    }
  }
}

@media (max-width: map-get( $sizes, custom ) - 1) {
  @for $i from 1 through length($planet-names) {
    .#{nth($planet-names, $i)} {
      height: $i * 4rem;
      width: $i * 4rem;

      // section:hover &:before {
      //   content: "#{nth($planet-names, $i)}";
      // }

      div {
        animation: orbit nth($orbit-time, $i) + s linear infinite;
      }

      $half: -0.5rem;

      div:after {
        background: nth($planet-colors, $i);
        height: nth($planet-diameter, $i) + rem;
        margin-left: nth($planet-diameter, $i) * $half;
        top: nth($planet-diameter, $i) * $half;
        width: nth($planet-diameter, $i) + rem;
      }
    }
  }
}

.sun {
  background: yellow;
  border-radius: 50%;
  height: 3em;
  box-shadow: 0 0 15px rgba(white, 0.8);
  @extend %center;
  transition: 1s transform ease-in-out;
  width: 3em;
}

.slider {
  margin-top: 100px;
  transform: rotate(90deg);
}

input[type='range'] {
  appearance: none !important;
  background: #444;
  height: 15px;
}

input[type='range']::-webkit-slider-thumb {
  -webkit-appearance: none !important;
  background: #6393e5;
  height: 30px;
  width: 15px;
  border: 2px solid white;
}

@keyframes orbit {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.mercury {
  border: 1px solid rgba(white, 0.9);
}
.is-the-gate .mercury{
  border: 1px solid rgba(#9CCADC, 0.9);
}
.venus {
  border: 1px solid rgba(white, 0.8);
}
.is-the-gate .venus {
  border: 1px solid rgba(#9CCADC, 0.8);
}
.earth {
  border: 1px solid rgba(white, 0.7);
}
.is-the-gate .earth {
  border: 1px solid rgba(#9CCADC, 0.7);
}
.mars {
  border: 1px solid rgba(white, 0.6);
}
.is-the-gate .mars {
  border: 1px solid rgba(#9CCADC, 0.6);
}
.jupiter {
  border: 1px solid rgba(white, 0.5);
}
.is-the-gate .jupiter {
  border: 1px solid rgba(#9CCADC, 0.5);
}
.saturn {
  border: 1px solid rgba(white, 0.4);
}
.is-the-gate .saturn {
  border: 1px solid rgba(#9CCADC, 0.4);
}
.uranus {
  border: 1px solid rgba(white, 0.3);
}
.neptune {
  border: 1px solid rgba(white, 0.2);
}
.orbit-plough {
  position: absolute;
  left: 233px;
  top: 86px;
  width: 20px;
  height: 20px;
  border-radius: 20px;
  opacity: 0.48;
  background: #fdcb6e;
  background-image: linear-gradient(
    180deg,
    rgba(237, 229, 149, 0) 0%,
    #003079 100%
  );
}
.is-the-gate .orbit-plough {
  visibility: hidden;
}
.orbit-sp-star {
  position: absolute;
  left: 288px;
  top: 685px;
  width: 23px;
  height: 23px;
  border-radius: 23px;
  opacity: 0.67;
  background: #7b88ff;
  background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #001f4f 100%);
}
.is-the-gate .orbit-sp-star {
  visibility: hidden;
}
</style>
