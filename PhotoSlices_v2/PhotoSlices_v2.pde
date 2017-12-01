/* given an image
 * generates a sparkline for andrewringler.com / all entries section
 */
int OFFSET_TOP = 55;
float scale = 1;
PImage srcImage, sparkline;
boolean startCreateCropRegion = false;
PVector topLeft, bottomRight;
PVector newTopLeft, newBottomRight;

void setup() {
  size(1000, 700);
  surface.setResizable(true);
  setupUI();
}

void draw() {
  background(0);

  if (srcImage != null) {
    float verticalSpace = height - 80;
    if (srcImage.width > width) {
      scale = (float)width / srcImage.width;
    }
    if (srcImage.height * scale > verticalSpace) {
      scale = (float)verticalSpace / srcImage.height;
    }
    pushMatrix();
    translate(0, OFFSET_TOP);
    scale(scale, scale);
    image(srcImage, 0, 0);

    if (topLeft != null && bottomRight != null) {
      noFill();
      strokeWeight(1.0 / scale);
      stroke(255);
      rectMode(CORNERS);
      rect(topLeft.x, topLeft.y, bottomRight.x, bottomRight.y);
    }

    popMatrix();


    if (sparkline != null) {
      image(sparkline, 0, height-10);
    }
  }

  if (mousePressed) {    
    if (!startCreateCropRegion) {
      startCreateCropRegion = true;
      newTopLeft = new PVector(mouseX/scale, (mouseY-OFFSET_TOP)/scale);
    } else {
      newBottomRight =  new PVector(mouseX/scale, (mouseY-OFFSET_TOP)/scale);
    }
  }
}

void mouseReleased() {
  startCreateCropRegion = false;
  if (newTopLeft.x < newBottomRight.x && newTopLeft.y < newBottomRight.y) {
    topLeft = newTopLeft;
    bottomRight = newBottomRight;
    if (srcImage != null) {
      generateSlice(srcImage); // update sparkline
    }
  }
}

void generateSlice(PImage img) {
  PImage working;
  if (topLeft != null && bottomRight != null) {
    int w = int(newBottomRight.x - topLeft.x);
    int h = int(newBottomRight.y - topLeft.y);
    working = createImage(w, h, RGB);
    working.copy(img, int(topLeft.x), int(topLeft.y), w, h, 0, 0, w, h);
  } else {
    working = img.copy();
  }
  working.resize(300, 60);
  // tile it
  PImage target1 = createImage(450, 10, RGB);
  int dx = 0;
  for (int x=0; x<300; x+=10) {
    for (int y=0; y<60; y+=10) {
      target1.copy(working, x, y, 10, 10, dx, 0, 10, 10);
      dx += 10;
    }
  }
  sparkline = target1;
}