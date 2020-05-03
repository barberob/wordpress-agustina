import gsap from 'gsap';

export default {
  init() {
    // JavaScript to be fired on the home page
    console.log('single project');
    this.initEls();
    this.initEvents();
  },

  initEls() {
    this.$els = {
      link : $('div.link_container'),
      letters_container : $('.letter_container'),
      technologies : $('div.technologies'),
      scroll_indicator : $('span.scroll_indicator')
    };
    this.timelines = {
      top_animation : gsap.timeline({repeat:0,paused : true})
        .from(this.$els.letters_container,{duration : 1, transform: "translateY(201%)",ease: "power1.out",stagger:0.025})
        .from(this.$els.technologies, {duration:0.5, opacity : 0 }, "-=0.25")
        .from(this.$els.scroll_indicator, {duration:0.5, opacity : 0})

    };
  },

  initEvents() {
    this.titleAnimation();
    this.linksAnimation();

  },

  titleAnimation() {
    this.timelines.top_animation.play();
  },

  linksAnimation () {
    this.$els.link.mouseenter( (e) => {
      $(e.currentTarget).addClass('active')
    }).mouseleave( (e) => {
      $(e.currentTarget).removeClass('active')
    });
  },

  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
