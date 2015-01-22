var x = 0;
var w = 0;
var h = 0;
var frameRate = 10;
var time = 0;

function setup() {
  createCanvas(windowWidth, windowHeight);
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
    createCanvas(w, h);
    background(121,13,30);
  }
  if(time % 5 == 0){
    background(121,13,30,20);
  }

  if(time % 2 == 0 && (dist(mouseX, mouseY, pmouseX, pmouseY) > 0)){
    var from = color(237,26,90,220);
    var to = color(212,237,26,220);
    var interA = lerpColor(from, to, random(1));
    fill(interA);
    var size = random(1);
    rect(mouseX, mouseY, 5+70*size, 5+70*size);
  }
  else if(time % 2 == 0 && (dist(touchX, touchY, ptouchX, ptouchY) > 0)){
    var from = color(237,26,90,220);
    var to = color(212,237,26,220);
    var interA = lerpColor(from, to, random(1));
    fill(interA);
    var size = random(1);
    rect(touchX, touchY, 5+70*size, 5+70*size);
  }

  time++;
}

// https://github.com/lmccart/p5.js/wiki/p5.js-overview
function touchStarted() {

}
function touchMoved() {
  return false;
}
