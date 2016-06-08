var x = 0;
var w = 0;
var h = 0;
var frameRate = 10;
var time = 0;

function setup() {
  var c = createCanvas(windowWidth, windowHeight);
  c.id('entries-p5js-animation');
  colorMode(RGB, 255);
  frameRate(frameRate);
  blendMode(BLEND);

  noStroke();
  fill(144,51,65,200);
}

function draw() {
  if(w != windowWidth || h != windowHeight){
    w = windowWidth;
    h = windowHeight;
    var c = createCanvas(w, h);
    c.id('entries-p5js-animation');
    background(255);
  }
  if(time % 5 == 0){
    background(255,255,255,20);
  }

  if(time % 2 == 0 && (dist(mouseX, mouseY, pmouseX, pmouseY) > 0)){
    var from = color(190,228,252,220);
    var to = color(97,132,188,220);
    var interA = lerpColor(from, to, random(1));
    fill(interA);
    var size = random(1);
    triangle(mouseX-35*size, mouseY, mouseX, mouseY-70*size, mouseX+35*size, mouseY);
  }
  else if(time % 2 == 0 && (dist(touchX, touchY, ptouchX, ptouchY) > 0)){
    var from = color(190,228,252,220);
    var to = color(97,132,188,220);
    var interA = lerpColor(from, to, random(1));
    fill(interA);
    var size = random(1);
    triangle(touchX-35*size, touchY, touchX, touchY-70*size, touchX+35*size, touchY);
  }

  time++;
}

// https://github.com/lmccart/p5.js/wiki/p5.js-overview
// function touchStarted() {
//
// }
// function touchMoved() {
//   return false;
// }
