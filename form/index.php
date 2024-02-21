<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group</title>
    <!-- <script src="../sweetalert.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

    <link rel = "stylesheet" href = "../form/style1.css">
    <style>
        
.containe {
   
    margin: 1px;
    padding-top: 12vh;
    padding-left: 8vw ;
    font-size: 23px;
    left: 20px;
    width: 80vw;
    border: 2px solide black;
    position: relative;
    /* display: flex; 
    flex: center; */

}


input[type=text], textarea{
    width: 60vw;
    padding: 5px;
    margin: 5px 0 5px 0;
    display: inline-block;
    background: #f1f1f1;
    border: 1px dotted rgb(77, 76, 125);
    font-size: medium;
    text-transform: capitalize;
    border-radius: 6.5px;

}

input[type=text]:focus {
    background-color: #ddd;
    outline: none;
  }

.button:hover {
    text-decoration: none;
  opacity:1;
  
}
/* Skeleton main style */


 .pi:hover {
    color: red;
 }
  
.pi {
    
    border: 2px dotted red;
    font-size: 25px;
    font-weight: 400;
    border-radius: 20px;
    text-align: center;
    display: flexs ;
    width: 80vw;
    justify-content: center;
    text-transform: uppercase;
    background-color: aqua;
}
.submit {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;
    align-items:flex-end;
    text-align: center;
    text-decoration: none;
    font-size: 25px;
    font-weight: 400;
    border: 1.2px transparent #4D4C7D;
    border-radius: 23px;

}


.contact{
    border-radius: 7px;
    width: 18vw;
    height: 5vh ;
    /* font-size: 21px; */
    background-color: #ddd;

}

.contact:focus {
    background-color: #ddd;
    outline: none;
  }

.describe {
    font-size: 18px;
    
}

.age {
    border: 1.4px dotted black;
    border-radius: 8px;
    width: 28vw;
    height: 5vh ;
    font-size: 23px ;
}

.age:focus {
    background-color: #ddd;
    outline: none;
  }

.choose {
    border: 1.3px dotted black;
    border-radius: 8px;
    width: 18vw;
    height: 5vh ;
}
.choose:focus {
    background-color: #ddd;
    border: 2px solid black;
}


    </style> 
</head>
<body>
    <!--Heder Start-->
    <div class="containe">
        
        <form id="myForm" action="connection.php" method="post">
            <div>
                <h4 class="pi">Personal Information</h4>
            </div>
            <ol>
                <div class="d-name">
                    <leble for="name"><li>Name of Devotee:</li></leble>
                    <input type="text" id="inName" placeholder="Name" name="name" required>
                </div>
                <div class="d-address">
                    <label><li>Address:</li></leble>
                    <textarea type="text" class="describe" id="inField" placeholder="Address" name="address" required></textarea>
                </div>
                <div class="d-f-contact">
                    <label><li>Family Contact Number:</li></label>
                    <input class="contact" id="inYear" type="number" placeholder="Number 1" name="contact1" required>
                    <input class="contact" type="number" id="inYear1" placeholder="Number 2" name="contact2" required>
                </div>
                <div class="d-name">
                    <leble for="name"><li>Name of Organiser:</li></leble>
                    <input type="text" placeholder="Name" id="oContN" name="oname">
                </div>
                <div class="o-contect">
                    <label><li>Organizer Contact Number:</li></label>
                    <input class="contact" id="oContNo" type="number" placeholder="Number 1"  name="ocontect">
                    <input class="contact" id="oContNo1" type="number" placeholder="Number 2" name="ocontect1">

                </div>


                <div class="d-gender" >
                    <label required ><li>Gender:</li></label>
                   <select class="choose" id="inNum" name="gender">

                    <option value="select"></option>
                    <option value="male" name="m">Male</option>
                    <option value="Female"name="w">Female</option>
                    <option value="other" name="o">other</option>

                   </select>
                </div>
                <div>
                    <leble for="age"><li>Age of Devotee:</li></leble>
                    <input type="number" class="age" id="age" placeholder="eg. 45 years"  name="age">
                </div>
                <div class="dob">
                    <leble><li>Date of Birth:</li></leble>
                    <input type="date"  id="inBirth" class="age" placeholder="14/02/2004" name="dob">
                </div>
                <div>
                    <leble for="age"><li>Aadhar Card Number:</li></leble>
                    <input type="number" class="age" placeholder="XXXX XXXX XXXX" name="aadhar" required>
                </div>
                <div class="d-disease">
                    <label for="Disease"><li>Having any Disease:</li></label>
                    <textarea type="text" class="describe" placeholder="Describe & mension Medicine"  id="disease" name="disease"></textarea>
                </div>
                <div>
                         
                    <label for="file" class="upload">Upload your Image</label>
                    <br>
                    <span>Choose one that desrcibes you perfectly</span>
                    <input type="file" id="file" name="image" accept="image/*" onchange="loadImage(event)" required>
                </div>
            </ol>
        
            <div class="submit" >
                <button type="submit" style="text-decoration: none; color: white;" onclick="submitForm(event); generateQRCode()">SUBMIT</button>
                <!-- <button type="submit" onclick="generateQRCode()"> QR code</button> -->

            </div>
            </form>   
                  
  

        </div>
        <div class="box" id="card">
            <div class="container" >
                <canvas id="result" class="card">
                    
                    <header id="head">
                        <div class="camp">
                            <h4>Bhakt Mitra</h4>
                            <span>Pandharpur</span>
                        </div>
                        <img src="../form/HLOGO.png.png" id="logo">
                    </header>
                    
                    <div class="content">
                        <img src="" id="imgDisplayed">
                        <ul>
                            <li id="name"></li>
                            <li id="birth"></li>
                            <li id="fieldYear"></li>
                            <li id="nob"></li>
                            <li>:<span id="num"></span></li>
                        </ul>
                        <!-- <img id="qrcode"> -->
                        
                    </div>
                    
                </canvas>
            </div>    
            <div class="card-back" id="card-back">
              <div class="qrcode" id="qrcode"></div> 
              <div class="qrcode-info">
                <p>Scan this qrcode to get more information</p>
              
                </div>
            </div>
            <button  class="show" id="preview">Preview</button>
            <button id="down">Download</button>
            <button id="btnConvert">Convert to Image</button>

        </div>
        


  <script src="../main.js"></script>
  <script>
function generateQRCode() {
    var name = document.getElementById('inName').value;
    var address = document.getElementById('inField').value;
    var fContact = document.getElementById('inYear').value;
    var fContact1 = document.getElementById('inYear1').value;
    var oContN = document.getElementById('oContN').value;
    var oContNo = document.getElementById('oContNo').value;
    var oContNo1 = document.getElementById('oContNo1').value;
    var gen = document.getElementById('inNum').value;
    var age = document.getElementById('age').value;
    var dob = document.getElementById('inBirth').value;
    var disease = document.getElementById('disease').value;
    var qrText = "Name: " + name + "\nAddress: " + address + "\nFamily Contact: " + fContact + "\n " + fContact1 + "\nOrganiser Name: " + oContN + "\nOrganiser Contact: " + oContNo +"\n " + oContNo1 + "\nGender: " + gen + "\nAge: " + age +  "\nDOB: " + dob + + "\nDisease: " + disease ;
    

    // Generate the QR code HTML
    var url = "https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=" + encodeURIComponent(qrText);
    // var url = "https://api.qr-code-generator.com/v1/create?access-token=your-acces-token-here" + encodeURIComponent(qrText);
// console.log(url);

    var ifr = `<iframe src="${url}" height="150px" scrolling="no" width="150px"></iframe>`;

    document.getElementById('qrcode').innerHTML = ifr;
    // Append the QR code HTML to the card  container
    // document.getElementById('result').innerHTML += qrCodeHTML;


}


</script>

<!-- <div id="divToConvert">
        Your content here -->

<script>
    document.getElementById('btnConvert').addEventListener('click', function () {
        html2canvas(document.getElementById('card')).then(function (canvas) {
            var img = canvas.toDataURL('image/png');
            var link = document.createElement('a');
            link.href = img;
            link.download = 'div_image.png';
            link.click();
        });
    });
</script>
<!-- <script src="../form/html2canvas.js"></script> -->

<style>
   .card-back {
    display: flex;
    flex-direction: row;
    height: 40vh;
    width: 38vw;
    border: 2px solid blue;
    border-radius: 15px;
    margin-left: 30vw;
    padding: 10px;
}

.qrcode-info {
    display: flex;
    justify-content: center; /* Center QR code horizontally */
    align-items: center; /* Center QR code vertically */
}

.qrcode {
    height: 12em;
    width: 12em;
    border: 2px solid transparent;
    position: relative;
}

/* Media query for smaller screens */
@media screen and (max-width: 768px) {
    .card-back {
        width: 60vw; /* Adjust width for smaller screens */
        height: 16vh;
        margin: 0 auto; /* Center the card horizontally */
    }
   
}

</style>

   
</body>
</html>