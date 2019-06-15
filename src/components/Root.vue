
<template>

  <main
    id="main"
    :class="isTheGate ? 'is-the-gate' : ''"
    v-if="loaded"
  >

    <app-nav></app-nav>

    <app-ui ref="ui"></app-ui>

    <app-main ref="main"></app-main>

    <app-stage></app-stage>

    <stats></stats>

    <gui></gui>

  </main>

</template>

<script>
import { mapState } from 'vuex'

import { States, Actions, Events } from '../constants'

import Commons from './mixins/Commons'

import AppUI from './core/AppUI.vue'

import AppNav from './core/AppNav.vue'

import AppMain from './core/AppMain.vue'

import AppStage from './core/AppStage.vue'

import Stats from './controls/Stats.vue'

import Gui from './controls/Gui.vue'

import meta from '../meta'

export default {
  name: 'Root',

  mixins: [Commons],

  data () {
    return {
      ready: false,

      timer: 0,

      delta: 0
    }
  },

  computed: {
    ...mapState({
      loaded: state => state.site.loaded
    }),
    isTheGate () {
      return this.$route.fullPath === '/projects/the-gate'
    }
  },

  components: {
    'app-ui': AppUI,

    'app-nav': AppNav,

    'app-main': AppMain,

    'app-stage': AppStage,

    stats: Stats,

    gui: Gui
  },

  watch: {
    $route (to, from) {
      this.update(to, from)
    }
  },

  methods: {
    initialize () {
      this.update()

      this.addListeners()

      this.$mixer.play('ambient')

      this.ready = true

      return new TimelineMax({
        tweens: [this.$refs.main.enter(), this.$refs.ui.enter()],
        stagger: 0.5,
        delay: 1
      })
    },

    update (to, from) {
      let name = to ? to.name : this.$route.name

      let params = to ? to.params : this.$route.params

      let theme =
        name == States.LEAF
          ? 'light'
          : name == States.PARTNERS
            ? 'color'
            : 'dark'
      this.$route.fullPath === '/projects/the-gate' && (theme = 'light')
      let scroll =
        name != States.PARTNERS &&
        name != States.CONTACTS &&
        params.slide != States.PROJECTS

      let ontop = meta.scrollontop

      let delay = ontop ? 0 : 2

      let visible = true

      if (this.ready) {
        if (name != States.SLIDER) {
          TweenMax.delayedCall(delay, () => {
            this.$mixer.play('section')
          })
        } else {
          TweenMax.delayedCall(delay, () => {
            this.$mixer.play('swipe')
          })
        }
      }

      this.$bus.emit(Events.UISTATE, { theme, scroll, visible })
    },

    addListeners () {
      this.$wheel.bus.on(Events.WHEEL, this.wheel)

      this.$swiper.bus.on(Events.DROP, this.drop)
    },

    wheel (delta) {
      let curr = this.current

      let sid = this.sid

      let next = curr

      next -= delta

      if (next < 0) {
        next = 0
      }

      sid -= delta

      if (this.delta != delta) {
        this.passThrough(curr, next, sid)

        clearTimeout(this.timer)

        this.timer = setTimeout(() => {
          this.delta = 0
        }, 1200)
      }

      this.delta = delta
    },

    drop (event) {
      let dir = event.dir

      let leave = event.leave

      let curr = this.current

      let sid = this.sid

      let next = curr

      next += dir

      if (next < 0) {
        next = 0
      }

      sid += dir

      if (leave) {
        this.passThrough(curr, next, sid)
      }
    },

    passThrough (curr, next, sid) {
      let model = this.tree[next]

      let slide = this.slider[sid] || this.slider[0]

      let length = this.slider.length - 1

      if (curr == 0) {
        if (sid > -1) {
          if (sid <= length) {
            this.navigateTo(States.SLIDER, { slide: slide.name })

            // this.$mixer.swipe()
          }
        }
      }
    }
  },

  created () {
    this.$bus.on(Actions.APP_READY, this.initialize)

    this.$ticker.fps(60)

    this.update()
  }
}
</script>

<style lang="scss">
main {
  position: absolute;

  top: 0;
  left: 0;
  bottom: 0;
  right: 0;

  overflow: hidden;

  z-index: 1;
  // opacity: 0.38;
  background-blend-mode: hard-light;
  background-image: linear-gradient(58deg,rgba(103, 163, 239, 0), #4775af, rgba(103, 163, 239, 0));

  // background: {

  // 	color: map-get( $colors, black );
  // }
  &.is-the-gate {
    background: #ffffff;
  }
}
</style>
