function generateQRCode()
 {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var qrText = "Name: " + name + "\nEmail: " + email + "\nPhone: " + phone;
    
    var url = "https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=" + encodeURIComponent(qrText);

    var ifr = `<iframe src="${url}" height="200" width="200"></iframe>`;

    document.getElementById('qrcode').innerHTML = ifr;
}
