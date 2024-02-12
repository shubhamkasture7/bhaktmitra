const canvas = document.getElementById("result");
const preview = document.getElementById("preview");
preview.addEventListener("click", prev);

canvas.height = canvas.width / 1.616;
const ctx = canvas.getContext("2d");
ctx.font = "20px Helvetica";

const image = document.getElementById("imgDisplayed");
const logo = document.getElementById("logo");

function prev(){

      let inName = document.getElementById("inName").value;
      let inBirth = document.getElementById("inBirth").value;
      let inField = document.getElementById("inField").value;
      let inYear = document.getElementById("inYear").value;
      let inNum = document.getElementById("inNum").value;

      const name = document.getElementById("name");
      const birth = document.getElementById("birth");
      const fieldYear = document.getElementById("fieldYear");
      const no = document.getElementById("inYear");
      const num = document.getElementById("num");

      name.innerHTML = inName;
      birth.innerHTML = inBirth;
      fieldYear.innerHTML = inField ;
      no.innerHTML = inYear;
      num.innerHTML = inNum;
      // var bgColor = '#ffffff';
      ctx.fillStyle = "#F4C888";
      ctx.rect(0, 0, 500, 66);
      ctx.fill();
      ctx.fillStyle = "#ffff";
      ctx.fillText("Bhakt Mitra", 10, 25);
      ctx.font = "13px Arial";
      ctx.fillText("Pandharpur", 15, 45);
      ctx.drawImage(logo, 215, -16, 100, 100);
      ctx.fillStyle = "#000000";
      ctx.fillText("Name:" + name.innerHTML, 110, 90);
      ctx.fillText("DOB:" + birth.innerHTML, 110, 110);
      ctx.fillText("Adds: " + fieldYear.innerHTML, 110, 130);
      ctx.fillText("No: " + no.innerHTML, 110, 148);
      ctx.fillText("Age:" + num.innerHTML, 110, 165);
      ctx.drawImage(image, 10, 65, 80, 110);
}

function loadImage(event) {
  const image = document.getElementById("imgDisplayed");
  image.src = URL.createObjectURL(event.target.files[0]);
}

const download = document.getElementById("down");
download.addEventListener("click", function(){

  if(window.navigator.msSaveBlob) {

    window.navigator.msSaveBlob(canvas.msToBlob(), "Card.png");
  } else {

    const a = document.createElement("a");
    document.body.appendChild(a);
    a.href = canvas.toDataURL();
    a.download = "Card.png";
    a.click();
    document.body.removeChild(a);
  }
});

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
    
    // Your form processing logic here
    // For demonstration, let's just display a message
  });
});
