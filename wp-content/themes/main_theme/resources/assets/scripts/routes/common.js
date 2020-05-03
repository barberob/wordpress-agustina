import gsap from 'gsap';
import $ from 'jquery';
let lastUpdateCall=null;

export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('all page');
    this.initEls();
    this.initEvents();
  },

  initEls(){
    this.$els = {
      cursor : $('div.cursor'),
      circle : $('div.circle'),
      circle_data : $('div.circle p'),
      menu_button : $('div.menu_button'),
      menu : $('div.menu'),
      menu_links : $('div.menu div.menu-menu-container li')
    };
    this.initCircle();
    this.timelines = {
      circle : gsap.timeline({repeat:0,paused : true})
        .to('.circle',{duration : 0.2, scale: 2})
        .to('.circle p',{duration :0.2, opacity : 1, scale : 0.5},"-=0.2"),

      menu: gsap.timeline({paused : true, repeat : 0})
        .to(this.$els.menu, {
          transform: "translateY(0%)",
          duration: 0.4,
          ease : 'power1.out'
        })
        .from('div.menu a', {opacity: 0,duration: 0.4,stagger: 0.1}, "-=0.2"),
    }
  },

  initEvents() {

    this.initMenu();

    this.watchMouseMove();

    $('[data-cursor]').mouseenter((e) => {
      let content = $(e.currentTarget).attr('data-cursor');
      $('.circle p').text(content);
      this.timelines.circle.play();
    }).mouseleave(() => {
      this.timelines.circle.reverse();
    });

  },

  watchMouseMove() {
    window.addEventListener("mousemove", e => this.mouseMove(e));
  },

  initCircle() {
    gsap.set(this.$els.circle, {
      xPercent: 50,
      yPercent: 50,
    });
    gsap.set(this.$els.cursor, {
      xPercent: -50,
      yPercent: -50,
    });
  },

  mouseMove(e){

    if(lastUpdateCall){ cancelAnimationFrame(lastUpdateCall);}
    let x = e.clientX;
    let y = e.clientY;
    // console.log({x, y});
    lastUpdateCall=requestAnimationFrame(() => {
      this.move(x,y);
      lastUpdateCall=null;
    });
  },

  move(clientX,clientY) {
    gsap.to(this.$els.circle, {
      x: clientX,
      y: clientY,
      duration : 0.3
    });
    gsap.to(this.$els.cursor, {
      x: clientX,
      y: clientY,
      duration : 0
    });
  },

  initMenu() {
    let open = false;
    this.$els.menu_button.click(() => {
      if(open === false && this.timelines.menu.progress() === 0) {
        this.timelines.menu.timeScale(1);
        this.timelines.menu.play();
        this.$els.menu_button.addClass('active');
        this.$els.menu_button.attr('data-cursor','close');
        open = true;
      } else {
        this.timelines.menu.timeScale(1.5);
        this.timelines.menu.reverse();
        this.$els.menu_button.removeClass('active');
        this.$els.menu_button.attr('data-cursor','menu');
        open=false;
      }
    });
  },



  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
