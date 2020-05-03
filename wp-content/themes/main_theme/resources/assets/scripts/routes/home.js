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
      thumbnail : $('div.thumbnail_container')
    }
  },

  initEvents() {
    $(document).ready(() => {
       gsap.to( this.$els.thumbnail, {width : '100%', duration : 1.5, ease : 'power2.out'})
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
