import $ from 'jquery';
import Flickity from 'flickity';
import 'flickity-imagesloaded';
import wheel from 'wheel';
import normalizeWheel from 'normalize-wheel';

export default {

  init() {

    this.initEls();
    this.initEvents();
    this.resizeLine();
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
    this.slider = {
      flkty : new Flickity( this.els.slider, {
      cellAlign:'center',
      adaptiveHeight :true,
      freeScroll: true,
      contain: true,
      prevNextButtons: false,
      pageDots: false,
      imagesLoaded: true,
      resize : true
    })

    };

    this.params = {
      velocity_divider : 10
    }
  },

  initEvents() {

    this.$els.button.mouseenter((event) => {
      $(event.currentTarget).addClass('active');
    }).mouseleave((event) => {
      $(event.currentTarget).removeClass('active');
    });

    this.initScroll();
  },

  initScroll() {

      wheel.addWheelListener(this.els.slider, event => {
        const wheelNormalized = normalizeWheel(event);
        this.slider.flkty.applyForce(-wheelNormalized.pixelY / this.params.velocity_divider);
        this.slider.flkty.startAnimation();
        this.slider.flkty.dragEnd();
      });
  },

  resizeLine() {
    let line_size = this.els.line.offsetHeight ;
    console.log(line_size)
  }



};
