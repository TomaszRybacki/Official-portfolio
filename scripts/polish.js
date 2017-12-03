let typed1 = new Typed('#type-it', {
  strings: ['', 'Cześć, nazywam się <span class="color">Tomasz Rybacki</span>.<br> Stwórzmy razem coś niesamowitego!'],
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
