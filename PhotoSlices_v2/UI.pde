import controlP5.*;

ControlP5 cp5;

void setupUI() {
  cp5 = new ControlP5(this);

  cp5.addButton("openImageButton")
    .setLabel("Open Image…")
    .setPosition(20, 20)
    .setSize(200, 19);

  cp5.addButton("saveSliceButton")
    .setLabel("Save Slice…")
    .setPosition(240, 20)
    .setSize(200, 19);
}

public void openImageButton(int value) {
  selectInput("Select image:", "imageSelected");
}

public void saveSliceButton(int value) {
  if (sparkline != null) {
    sparkline.save("saved/sparkline_" + year() + "-" + month() + "-" + day() + "_" + hour() + "-" + minute() + "-" + second() + ".jpg");
  }
}

void imageSelected(File selection) {
  if (selection != null) {
    println("User selected " + selection.getAbsolutePath());
    PImage img = loadImage(selection.getAbsolutePath());
    if (img != null) {
      srcImage = img;
      topLeft = null; 
      bottomRight = null;
      generateSlice(img);
    }
  }
}