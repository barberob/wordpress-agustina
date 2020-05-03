import gsap from 'gsap';

export default {
  init() {
    // JavaScript to be fired on the home page

    this.initEls();
    this.initEvents();
  },


  initEls() {
    this.$els = {
      thumbnail : $('div.thumbnail_container')
    }
  },

  initEvents() {
    $(document).ready(() => {
       gsap.to( this.$els.thumbnail, {width : '50%', duration : 1.5, ease : 'power2.out'})
    });
  },


  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
