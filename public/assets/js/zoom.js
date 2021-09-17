// State
const state = {
	animations: ['slideLeft', 'slideUp'],
	view: 'slide'
}

// Controls
const controls = Vue.component('controls', {
  template: '#controls',
	data: state,
	methods: {
		setView(animation) {
			state.view = animation
		}
	}
})

// Transitions
const slideLeft = Vue.component('slideLeft', {
  template: '#page',
	methods: {
		enter(el, done) {
			const tl = new TimelineMax({
				onComplete: done
			})
			
			tl.set(el, {
				x: window.innerWidth * 1.5,
				scale: 0.8,
				transformOrigin: '50% 50%'
			})
			
			tl.to(el, 0.5, {
				x: 0,
				ease: Power4.easeOut
			});
			
			tl.to(el, 1, {
				scale: 1,
				ease: Power4.easeOut
			});
		},
		leave(el, done) {
			TweenMax.fromTo(el, 1, {
				autoAlpha: 1
			}, {
				autoAlpha: 0,
				ease: Power4.easeOut,
				onComplete: done
			});
		}	
	}
})

const slideUp = Vue.component('slideUp', {
  template: '#page',
	methods: {
		enter(el, done) {
			const tl = new TimelineMax({
				onComplete: done
			})
			
			tl.set(el, {
				y: window.innerWidth * 1.5,
				scale: 0.8,
				transformOrigin: '50% 50%'
			})
			
			tl.to(el, 0.5, {
				y: 0,
				ease: Power4.easeOut
			});
			
			tl.to(el, 1, {
				scale: 1,
				ease: Power4.easeOut
			});
		},
		leave(el, done) {
			TweenMax.to(el, 1, {
				y: window.innerHeight * -1.5,
				ease: Power4.easeOut,
				onComplete: done
			});
		}	
	}
})


// App
const app = new Vue({
  el: '#app',
  data() {
		return state
	}
})