<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Group Information</h2>
        <form action="connect.php" method="post">
            <div class="form-group">
                <label for="name"> Group Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact">Organiser Name:</label>
                <input type="text" id="contact" name="organiser_name" required>
            </div>
            <div class="form-group">
                <label for="contact">Number of people:</label>
                <input type="tel" id="contact" name="peoples" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact number of Organiser:</label>
                <input type="tel" id="contact" name="organiser_contact" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>
            <!-- <div class="form-group">
                <label for="contact">Co-Organiser Name:</label>
                <input type="text" id="contact" name="Co-Organiser_name" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact number of Co-Organiser:</label>
                <input type="tel" id="contact" name="Co-Organiser_Contact" required>
            </div>  -->
            <div class="form-group">
                <input type="submit" value="Submit" id="submit">
            </div>
        </form>
    </div>
</body>
</html>
<!-- <script>
    let submit = document.getElementById ("submit");

    function submit=submit{
        
    }
"https://api.qrserver.com/v1/create-qr-code/?size=150x150&data="+submit.value;

</script> -->