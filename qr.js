function copy() {
canvas.height = canvas.width / 1.616;
var qr = document.getElementById("qrcode");
var ctx = canvas.getContext("2d");

ctx.drawImage(
    qr,10,90.50,50
);

}

setTimeout(() => { 
    copy();
},300)