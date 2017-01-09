var FontFaceObserver = require('fontfaceobserver');
var Prism = require('prismjs');
var Cookies = require('js-cookie');

if (document.documentElement.className.indexOf("type-loaded") > -1) {
  return;
}

// Fonts
var loraRegular = new FontFaceObserver('Lora', {
  weight: 400
});

var loraBold = new FontFaceObserver('Lora', {
  weight: 700
});

Promise.all([loraRegular.load(), loraBold.load()]).then(function () {
  // console.log('Family A & B have loaded');
  document.documentElement.className += " type-loaded";
  Cookies.set('type_loaded', 'true', { expires: 1, domain: 'localhost' });
  console.log('font loaded!')
});
