
<template>

	<header :class="{ 'off': !active }">

		<div id="gsap-logo" @click="backToHome">
			<div id="logo">
				<img :src="assets['logo'].src" :class="{ 'show': !inversed }" alt="">
				<img :src="assets['logo2'].src" :class="{ 'show': inversed }" alt="">
			</div>
		</div>

	</header>

</template>

<script>

import { mapState } from 'vuex'

import { States, Events } from '../../constants'

export default {

  name: 'Header',

  data () {
    return {

      active: true,

      inversed: false
    }
  },

  computed: mapState({

    assets: state => state.site.assets
  }),

  methods: {

    update (state) {
      if (state.visible !== undefined) { this.active = state.visible }

      if (state.theme !== undefined) { this.inversed = state.theme == 'light' }
    },

    enter () {
      let $logo = this.$el.querySelector('#gsap-logo')

      return new TimelineMax({ tweens: [

        TweenMax.from($logo, 1, { y: -40, force3D: true, ease: Cubic.easeInOut })

      ] })
    },

    backToHome () {
      this.$router.push({ name: States.HOME })
    }
  },

  created () {
    this.$bus.on(Events.UISTATE, this.update)
  },

  destroyed () {
    this.$bus.off(Events.UISTATE, this.update)
  }
}
</script>

<style lang="scss">

	header {

		position: absolute;

		top: 20px; left: 0; right: 0;

		overflow: hidden;

		padding: 5px 0;

		z-index: 5;

		height: 88px;

		text: {

			align: center;
		}

		@media ( max-width: map-get( $sizes, custom ) - 1 ) {

			top: 25px;
		}

		#gsap-logo {

			position: absolute;

			width: 48px;
			height: 48px;

			margin: 0 auto;

			right: 20px;

			@media ( max-width: map-get( $sizes, custom ) - 1 ) {

				@include scale( 0.75, 0.75 );
			}
		}

		#logo {

			position: relative;

			width: 48px;
			height: 48px;

			margin: 0 auto;

			cursor: pointer;

			@include translate( 0, 0 );

			@include transition( all .8s map-get( $ease, cubic_out ) );

			@media ( max-width: map-get( $sizes, custom ) - 1 ) {

				@include scale( 0.75, 0.75 );
			}

			img {

				position: absolute;

				width: 100%; height: 100%;

				top: 0; left: 0;

				opacity: 0;

				@include transition( opacity 1s map-get( $ease, cubic_in_out ) );

				&.show {

					opacity: 1;
				}
			}
		}

		&.off {

			#logo {

				@include transform( translate( 0, -40px ) );

				@media ( max-width: map-get( $sizes, custom ) - 1 ) {

					@include transform( translate( 0, -40px ) scale( 0.75, 0.75 ) );
				}
			}
		}
	}

</style>
