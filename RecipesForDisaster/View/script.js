//JavaScript
// Provided an option to switch between dark background with a yellow font which is for visually impaired


function toggleColor() {
    var body = document.body;
    var colorButton = document.getElementById("color-button");
    if (body.style.backgroundColor === "black") {
      body.style.backgroundColor = "white";
      body.style.color = "black";
      colorButton.innerHTML = "Switch to black background";
    } else {
      body.style.backgroundColor = "black";
      body.style.color = "yellow";
      colorButton.innerHTML = "Switch to white background";
    }
  }

 //JQuery
 

 //Ajax + JQuery + Json



  