
<template>

	<transition

		@enter="enter"

    	@leave="leave"

    	:css="false">

		<nav id="app-nav" v-if="isOpen">

			<div id="nav-bg1" ref="redbg"></div>
			<div id="nav-bg2" ref="darkbg"></div>
			<div id="nav-wrap">

				<div class="table">
					<div class="table-cell">

						<ul>

							<span class="top line" ref="topLine"></span>

							<li v-for="item in tree" :class="{ 'active': isActive( item.name ) }" :key="item.name">

								<a :href="item.path" :name="item.name" @click.prevent="goTo( item )" @mouseenter="mouseenter">
									<span class="label font-reg">
										{{ locale.menu[ item.ref ] }}
										<!--span class="letter" v-for="letter in item.label" :class="{ 'space': letter == ' ' }">{{ letter }}</span-->
									</span>
									<span class="row">
										<span class="dark"></span>
										<span class="red"></span>
									</span>
								</a>

							</li>

							<li>
								<a href="#" :name="'pressarea'" @click.prevent="exLink" @mouseenter="mouseenter">
									<span class="label font-reg">
										{{ locale.menu.pressarea }}
										<!--span class="letter" v-for="letter in locale.ui.pressarea" :class="{ 'space': letter == ' ' }">{{ letter }}</span-->
									</span>
									<span class="row">
										<span class="dark"></span>
										<span class="red"></span>
									</span>
								</a>

							</li>

							<span class="bot line" ref="botLine"></span>

						</ul>

					</div>
				</div>

				<p class="lang" @click="toggleLang">
					<span>

						<span class="font-reg">{{ lang }}</span>

					</span>
				</p>
				<ul class="social">
					<li id="medium"><a :href="social.medium" target="_blank"><img :src="assets['medium'].src" alt=""></a></li>
					<li id="twitter"><a :href="social.twitter" target="_blank"><img :src="assets['twitter'].src" alt=""></a></li>
					<li id="github"><a :href="social.github" target="_blank"><img :src="assets['github'].src" alt=""></a></li>
				</ul>

				<p class="footer">
					<span>

						<span class="font-reg">{{ locale.footer.rights }}</span>

						<a :href="'mailto:'+locale.footer.email" target="_self"><span class="font-reg">{{ locale.footer.email }}</span></a>

					</span>
				</p>

			</div>

		</nav>

	</transition>

</template>

<script>

import { mapState } from 'vuex'

import { States, Actions } from '../../constants'

import Commons from '../mixins/Commons'

export default {

  name: 'AppNav',

  mixins: [ Commons ],

  data () {
    return {

      isOpen: false
    }
  },

  computed: {

    ...mapState({

      tree: state => state.site.collections.tree,

      locale: state => state.site.locale,

      assets: state => state.site.assets
    }),

    social () { return window.appconf.social },

    lang () { return window.appconf.lang === 'en' || window.appconf.lang === '' ? 'it' : 'en' }
  },

  watch: {

    $route: function (to, from) {
      if (this.isOpen) { this.close() }
    }
  },

  methods: {

    open () {
      this.$mixer.play('menu')

      this.isOpen = true
    },

    close () {
      this.$mixer.play('menu')

      this.isOpen = false
    },

    goTo (model) {
      let leaf = model.leaf; let slide = '/'

      name = leaf ? States.LEAF : model.name

      this.navigateTo(name, { leaf, slide })
    },

    exLink () {
      window.open('http://bbs.comunion.io', '_blank')
    },

    mouseenter (event) {
      this.$mixer.play('tic')
    },

    isActive (name) {
      let route = this.$route.name

      if (route == States.LEAF) { route = States.PROJECTS }

      return name == route
    },

    leave (el, done) {
      let $refs = this.$refs

      return new TimelineMax({ tweens: [

        new TimelineMax({ tweens: [

          TweenMax.to($refs.darkbg, 0.8, { y: window.innerHeight, force3D: true, ease: Cubic.easeInOut }),

          TweenMax.to($refs.redbg, 0.8, { y: window.innerHeight, force3D: true, ease: Cubic.easeInOut })

        ],
        stagger: 0.1 }),

        new TimelineMax({ tweens: [

          TweenMax.to($refs.topLine, 0.8, { scaleY: 0, ease: Cubic.easeOut }),

          TweenMax.to($refs.botLine, 0.8, { scaleY: 0, ease: Cubic.easeOut })

        ],
        stagger: 0.2 }),

        TweenMax.allTo(el.querySelectorAll('ul li a .font-reg'), 0.8, { y: 30, force3D: true, ease: Cubic.easeInOut }, 0.025),

        new TimelineMax({ tweens: [

          TweenMax.allTo(el.querySelectorAll('.social li'), 0.8, { y: '100%', force3D: true, ease: Cubic.easeInOut }),

          TweenMax.to(el.querySelectorAll('.lang >span'), 0.8, { y: '100%', force3D: true, ease: Cubic.easeInOut }),

          TweenMax.to(el.querySelectorAll('.footer >span'), 0.8, { y: '100%', force3D: true, ease: Cubic.easeInOut })

        ] })

      ],
      stagger: 0.05,
      onComplete: done })
    },

    enter (el, done) {
      let $refs = this.$refs

      return new TimelineMax({ tweens: [

        new TimelineMax({ tweens: [

          TweenMax.from($refs.redbg, 1, { y: window.innerHeight, force3D: true, ease: Cubic.easeInOut }),

          TweenMax.from($refs.darkbg, 1, { y: window.innerHeight, force3D: true, ease: Cubic.easeInOut })

        ],
        stagger: 0.1 }),

        new TimelineMax({ tweens: [

          new TimelineMax({ tweens: [

            TweenMax.from($refs.botLine, 1, { scaleY: 0, ease: Cubic.easeOut }),

            TweenMax.from($refs.topLine, 1, { scaleY: 0, ease: Cubic.easeOut })

          ],
          stagger: 0.4 }),

          new TimelineMax({ tweens: [

            TweenMax.allFromTo(el.querySelectorAll('.row span.red').reverse(), 1, { x: '-100%' }, { bezier: { curviness: 0, values: [{ x: '0%' }, { x: '100%' }] }, ease: Cubic.easeOut }, 0.1),

            TweenMax.allFromTo(el.querySelectorAll('.row span.dark').reverse(), 1, { x: '-100%' }, { bezier: { curviness: 0, values: [{ x: '0%' }, { x: '100%' }] }, ease: Cubic.easeOut }, 0.1)

          ],
          stagger: 0.2 }),

          TweenMax.allFrom(el.querySelectorAll('ul li a .font-reg').reverse(), 1, { x: '100%', force3D: true, ease: Cubic.easeOut }, 0.1),

          new TimelineMax({ tweens: [

            TweenMax.allFrom(el.querySelectorAll('.social li'), 0.9, { y: '100%', force3D: true, ease: Cubic.easeInOut }, 0.09),

            TweenMax.from(el.querySelectorAll('.lang >span'), 0.9, { y: '100%', force3D: true, ease: Cubic.easeInOut }),

            TweenMax.from(el.querySelectorAll('.footer >span'), 0.9, { y: '100%', force3D: true, ease: Cubic.easeInOut })

          ] })

        ],
        stagger: 0.2 })

      ],
      stagger: 0.35,
      onComplete: done })
    }
  },

  created () {
    this.$bus.on(Actions.OPEN_MENU, this.open)

    this.$bus.on(Actions.CLOSE_MENU, this.close)
  }
}
</script>

<style lang="scss">

	#app-nav {

		position: absolute;

		top: 0; left: 0;

		width: 25%;

		height: 100%;

		z-index: 10;
		opacity: 0.8;

		@media ( max-width: map-get( $sizes, custom ) - 1 ) {

			width: 100%;
		}

		#nav-bg1 {

			position: absolute;

			top: 0; left: 90px; right: 0; bottom: 0;

			z-index: 2;

			background: {

				color: map-get( $colors, com_fill );
			}

			@media ( max-width: map-get( $sizes, custom ) - 1 ) {

				left: 0px;
			}
		}

		#nav-bg2 {

			position: absolute;

			top: 0; left: 90px; right: 0; bottom: 0;

			z-index: 2;

			background: {

				color: map-get( $colors, com_fill );
			}

			@media ( max-width: map-get( $sizes, custom ) - 1 ) {

				left: 0px;
			}
		}

		#nav-wrap {

			position: absolute;

			top: 0; left: 90px; right: 0; bottom: 0;

			z-index: 2;

			@media ( max-width: map-get( $sizes, custom ) - 1 ) {

				left: 0px;
			}

			.table {

				width: 100%; height: 100%;
			}

			ul {

				list-style: none;

				//line-height: 40px;

			    padding: 0 40px 0 80px;

			    @media ( max-width: map-get( $sizes, custom ) - 1 ) {

			    	padding: 0 40px 0 100px;
			    }

				span.line {

					content: '';

					position: relative;

					left: 20px;

					width: 1px;

					height: 40px;

					display: block;

					background: {

						color: map-get( $colors, com_primary );
					}

			    	&.top {

			    		@include transform-origin( 0% 100% );

						margin-bottom: 40px;
				    }

				    &.bot {

				    	@include transform-origin( 0% 100% );

						margin-top: 40px;
				    }
			    }

				li {

					position: relative;

					overflow: hidden;

					margin: 20px 0;

					a {

						position: relative;

						overflow: hidden;

						display: inline-block;

						letter-spacing: map-get( $ls, s );

						font: {

							size: map-get( $typo, h4_ );
						}

						text: {

							decoration: none;

							transform: uppercase;
						}

						&:hover {

							.label {

								color: map-get( $colors, com_primary );

								@include transition( color .5s map-get( $ease, cubic_out ) );
							}
						}

						>span {

							position: relative;

							display: inline-block;

							color: #ffffff;
						}

						span.label {

							@include transition( color .8s map-get( $ease, cubic_in_out ) );
						}

						span.letter {

							position: relative;

							display: inline-block;

							color: #454545;
						}

						span.row {

							position: absolute;

							overflow: hidden;

							top: 0; left: 0; right: 0; bottom: 0;

							span {

								position: absolute;

								top: 0; left: 0;

								width: 100%; height: 100%;

								//opacity: 0.75;

								&.red {
									display: none;
									background: {

										color: map-get( $colors, com_primary );
									}
								}

								&.dark {
									display: none;
									background: {

										color: map-get( $colors, dark );
									}
								}
							}
						}
					}

					&.active {

						a {

							>span {

								color: map-get( $colors, com_primary );
							}

							span.letter {

								color: map-get( $colors, com_primary );
							}
						}
					}
				}
			}

			.lang {

				position: absolute;

				bottom: 24px; left: 129px;

				width: 44px; height: 44px;

				letter-spacing: map-get( $ls, s );

				line-height: 44px;

				overflow: hidden;

				cursor: pointer;

				color: #454545;

				visibility: hidden;

				opacity: 0;

				text: {

					transform: uppercase;

					align: center;
				}

				font: {

					size: map-get( $typo, btn_ );
				}

				@include transition( color .5s map-get( $ease, cubic_out ) );

				&:hover {

					@include transition( color .5s map-get( $ease, cubic_in_out ) );

					color: #7B88FF;
				}

				@media ( max-width: map-get( $sizes, custom ) - 1 ) {

					bottom: 70px; left: 86px;

					visibility: visible;

					opacity: 1;
				}

				>span {

					position: relative;

					display: inline-block;
				}
			}
			.social{
				margin-left: -60px;
			}
			ul.social {

				position: absolute;

				bottom: 32px; left: 135px;

				overflow: hidden;

				padding: 0;

				li {

				    float: left;

				    padding: .25em .35em;

				    margin: 0 7px;

					a {

					    display: block;

						img {

							width: 22px;
							height: 22px;
							display: block;
						}
					}
				}

				@media ( max-width: map-get( $sizes, custom ) - 1 ) {

					bottom: 78px; left: 125px;
				}
			}

			.footer {

				position: absolute;

				bottom: 24px; left: 0;

				overflow: hidden;

				color: map-get( $colors, rgb_light_white );

				letter-spacing: map-get( $ls, s );

				padding: 0 50px 0 100px;

				line-height: 1.5em;

				display: none;

				font: {

					size: map-get( $typo, s_ ) - 1;
				}

				text: {

					transform: uppercase;
				}

				@media ( max-width: map-get( $sizes, custom ) - 1 ) {

					display: block;
				}

				a {

					color: map-get( $colors, rgb_full_white );

					@include transition( color .8s map-get( $ease, cubic_out ) );

					text: {

						decoration: none;
					}
				}

				>span {

					position: relative;

					display: inline-block;

					padding: 5px 0;
				}
			}
		}

		$duration: 0.9s;

		$bgstagger: 0.15s;

		$labelstagger: 0.025s;

		$letterstagger: 0.025s;

		$totduration: 4.5s;

		$bgeasing: map-get( $ease, cubic_in_out );

		$lettereasing: map-get( $ease, cubic_out );

		&.nav-enter-active, &.nav-leave-active {

			@include transition( transform $totduration );

			#nav-bg1 { @include transition( transform $duration $bgeasing ); }

			#nav-bg2 { @include transition( transform $duration $bgeasing ); }

			li .letter { @include transition( all $duration $lettereasing ); }
		}

		&.nav-leave-active {

			#nav-bg1 { @include transform-origin( 0% 100% ); @include transition-delay( $bgstagger ); }

			#nav-bg2 { @include transform-origin( 0% 100% ); @include transition-delay( 0s ); }

			li { @for $i from 1 to 10 {

					&:nth-child(#{$i}) {

						.letter { @for $j from 1 to 20 {

							&:nth-child(#{$j}) {

								@include transition-delay( 0.2 + $i * $labelstagger + $letterstagger ); }
							}
						}
					}
				}
			}
		}

		&.nav-enter-active {

			#nav-bg1 { @include transform-origin( 0% 100% ); @include transition-delay( 0s ); }

			#nav-bg2 { @include transform-origin( 0% 100% ); @include transition-delay( $bgstagger ); }

			li { @for $i from 1 to 10 {

					&:nth-child(#{10-$i}) {

						.letter { @for $j from 1 to 20 {

							&:nth-child(#{20-$j}) {

								@include transition-delay( $i * $labelstagger + $j * $letterstagger ); }
							}
						}
					}
				}
			}
		}

		&.nav-enter, &.nav-leave-active {

			#nav-bg1 { @include scale( 1, 0 ); }

			#nav-bg2 { @include scale( 1, 0 ); }

			li .letter { @include translate3d( 0, 30px, 0 ); }
		}
	}

</style>
