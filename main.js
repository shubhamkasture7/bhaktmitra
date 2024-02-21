const canvas = document.getElementById("result");
const preview = document.getElementById("preview");
preview.addEventListener("click", prev);

canvas.height = canvas.width / 1.616;
var ctx = canvas.getContext("2d");
ctx.font = "20px Helvetica";

const image = document.getElementById("imgDisplayed");
const logo = document.getElementById("logo");
// var qr = document.getElementById("qrcode");

function prev() {
    let inName = document.getElementById("inName").value;
    let inBirth = document.getElementById("inBirth").value;
    let inField = document.getElementById("inField").value;
    let nob = document.getElementById("inYear").value;
    let inNum = document.getElementById("inNum").value;

    const name = document.getElementById("name");
    const birth = document.getElementById("birth");
    const fieldYear = document.getElementById("fieldYear");
    const no = document.getElementById("inYear");
    const num = document.getElementById("num");

    name.innerHTML = inName;
    birth.innerHTML = inBirth;
    fieldYear.innerHTML = inField;
    no.innerHTML = nob;
    num.innerHTML = inNum;

    // Clear the canvas by filling it with white color
    ctx.fillStyle = "#ffffff"; // Set fill color to white
    ctx.fillRect(0, 0, canvas.width, canvas.height); // Fill the entire canvas with white

    // Now draw other elements on the canvas
    ctx.fillStyle = "#F4C888";
    ctx.fillRect(0, 0, 500, 66);
    ctx.fillStyle = "#fff";
    ctx.fillText("Bhakt Mitra", 10, 25);
    ctx.font = "13px Arial";
    ctx.fillText("Pandharpur", 15, 45);
    ctx.drawImage(logo, 215, -16, 100, 100);
    ctx.fillStyle = "#000000";
    ctx.fillText("Name:" + name.innerHTML, 110, 90);
    ctx.fillText("DOB:" + birth.innerHTML, 110, 110);
    ctx.fillText("Adds: " + fieldYear.innerHTML, 110, 130);
    ctx.fillText("No: " + nob.innerHTML, 110, 148);
    ctx.fillText("Gender:" + num.innerHTML, 110, 165);
    ctx.drawImage(image, 10, 65, 80, 110);
    ctx.drawImage(qr,10,90,50,50);
}



function loadImage(event) {
  const image = document.getElementById("imgDisplayed");
  image.src = URL.createObjectURL(event.target.files[0]);
}


const download = document.getElementById("down");
download.addEventListener("click", function(){
    if(window.navigator.msSaveBlob) {
        window.navigator.msSaveBlob(canvas.msToBlob(), "Card.jpg");
    } else {
        const a = document.createElement("a");
        document.body.appendChild(a);

        // Convert canvas image data to JPG format
        const imageData = canvas.toDataURL("image/jpeg", 1.0);

        // Set the href attribute to the JPG image data
        a.href = imageData;
        a.download = "Card.jpg";
        a.click();
        document.body.removeChild(a);
    }
});



function submitForm(event) {
  event.preventDefault(); // Prevent default form submission behavior

  // Get form data
  var formData = new FormData(document.getElementById("myForm"));

  // Send form data asynchronously using AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "connection.php", true);
  xhr.onload = function () {
      if (xhr.status === 200) {
          // Handle successful form submission
          alert("Form submitted successfully!");
          // Optionally, you can redirect the user after successful submission
          window.location.href = "http://localhost/BhaktMitra/form/index.php#card";
      } else {
          // Handle errors
          alert("Error: " + xhr.statusText);
      }
  };
  xhr.onerror = function () {
      // Handle network errors
      alert("Network error occurred");
  };
  xhr.send(formData);
}
