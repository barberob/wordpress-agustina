import gsap from 'gsap';
import $ from "jquery";

export default {
  init() {
    // JavaScript to be fired on the home page

    this.initEls();
    this.initEvents();
  },


  initEls() {
    this.$els = {
      button : $('div.button'),
      thumbnail : $('div.thumbnail_container'),
      title : $('div.description_container h2'),
      text : $('div.description_container p'),
      link : $('div.description_container a')
    };
    this.timeline = {
      intro : gsap.timeline({repeat:0,paused : true})
        .to( this.$els.thumbnail, {width : '100%', duration : 1.5, ease : 'power2.out'})
        .from( this.$els.title, {opacity: 0, duration : 0.5, ease : 'power2.out'},"-=0.5")
        .from( this.$els.text, {opacity: 0, duration : 0.5, ease : 'power2.out'})
        .from( this.$els.link, {opacity: 0, duration : 0.5, ease : 'power2.out'},"-=0.5")
    }
  },

  initEvents() {
    $(document).ready(() => {
      this.timeline.intro.play();
    });

    this.$els.button.mouseenter((event) => {
      $(event.currentTarget).addClass('active');
    }).mouseleave((event) => {
      $(event.currentTarget).removeClass('active');
    });
  },


  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
