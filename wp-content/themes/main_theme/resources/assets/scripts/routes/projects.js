import $ from 'jquery';
import lax from 'lax.js';

export default {

  init() {
    this.initEls();
    this.initEvents();
    this.initParallax();
  },

  initEls() {

    this.$els = {
      button : $('div.button')
    };
    this.els = {
      slider : document.querySelector('.main-carousel'),
      line : document.querySelector('div.line'),
      technology_container : document.querySelector('div.technology'),
      p_technology : document.querySelector('p.technology')
    };

  },

  initEvents() {

    this.$els.button.mouseenter((event) => {
      $(event.currentTarget).addClass('active');
    }).mouseleave((event) => {
      $(event.currentTarget).removeClass('active');
    });
  },

  initParallax() {
    window.onload = function() {
      lax.setup(); // init

      const updateLax = () => {
        lax.update(window.scrollY);
        window.requestAnimationFrame(updateLax)
      };

      window.requestAnimationFrame(updateLax);
    }
  }
};
