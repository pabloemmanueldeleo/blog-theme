var FontFaceObserver = require('fontfaceobserver');
var Prism = require('prismjs');

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
  console.log('this is loaded')
});
