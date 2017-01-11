var FontFaceObserver = require('fontfaceobserver');
var Prism = require('prismjs');
var Cookies = require('js-cookie');
var PrismPHP = require('./prism-languages/prism-php.js');
var PrismBash = require('./prism-languages/prism-bash.js');
var PrismSCSS = require('./prism-languages/prism-scss.js');

/**
 * Fonts related code section. Don't put any code right after this section
 * since it will not execute if return; under the if statement is executed.
 */
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
