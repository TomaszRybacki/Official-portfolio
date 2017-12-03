let typed1 = new Typed('#type-it', {
  strings: ['', "Hi, my name is <span class = 'color'> Tomasz Rybacki</span>. <br> Let's create something amazing together!"],
  typeSpeed: 60,
  startDelay: 1000,
  smartBackspace: false,
  loop: false,
  showCursor: true,
  cursorChar: '_'
});

setTimeout(function () {
  $('.typed-cursor').hide();
}, 8000);
