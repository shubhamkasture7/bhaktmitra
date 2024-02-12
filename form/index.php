<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group</title>
    <link rel = "stylesheet" href = "../form/style1.css">
    <style>
        
.containe {
   
    margin: 1px;
    padding-top: 12vh;
    padding-left: 8vw ;
    height: 100vmax;
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
        <!-- <div class="pi">
            <h3>Personal </h3>
        </div> -->
        <form action="connection.php" method="post">
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
                    <input class="contact" type="number" placeholder="Number 2" name="contact2" required>
                </div>
                <div class="d-name">
                    <leble for="name"><li>Name of Organiser:</li></leble>
                    <input type="text" placeholder="Name" name="oname">
                </div>
                <div class="o-contect">
                    <label><li>Organizer Contact Number:</li></label>
                    <input class="contact" type="number" placeholder="Number 1"  name="ocontect">
                    <input class="contact" type="number" placeholder="Number 2" name="ocontect1">

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
                    <input type="number" class="age" placeholder="eg. 45 years"  name="age">
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
                    <textarea type="text" class="describe" placeholder="Describe & mension Medicine" name="disease"></textarea>
                </div>
                <div>
                         
                    <label for="file" class="upload">Upload your Image</label>
                    <br>
                    <span>Choose one that desrcibes you perfectly</span>
                    <input type="file" id="file" name="image" accept="image/*" onchange="loadImage(event)" required>
                </div>
            </ol>
        
            <div class="submit" >
                <button type="submit" id="myForm" style="text-decoration: none; color: white;">SUBMIT</button>
                <!-- <button type="submit" id="preview">SUBMI T <a id="submit" href="idcard.html"> <a id="submit" href="http://localhost/Bhakt%20Mitra/form/index.php#card"> </a></button> -->

            </div>
            <p> Scrol down and previvw your idcard nad Download <br> After that submit</p>
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
                            <li id="no"></li>
                            <li>:<span id="num"></span></li>
                        </ul>
                    </div>
                    
                </canvas>
            </div>    

            <button type="" class="show" id="preview">Preview</button>
            <button id="down">Download</button>
        </div>
  <script src="../main.js"></script>


   
</body>
</html>