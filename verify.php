<?php
session_start();
include 'php/db.php';
$unique_id = $_SESSION['unique_id'];
if(empty($unique_id)){
header("Location: login.php");
}
$qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
if(mysqli_num_rows($qry) > 0) {
$row = mysqli_fetch_assoc($qry);
if ($row) {
$_SESSION['verification_status'] = $row['verification_status'];
if($row['verification_status'] == 'Verified'){
header("Location: index.php");
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/form.css">
    <link rel="stylesheet" href="./styles/verify.css">
    <script src="https://kit.fontawesome.com/91e6b6d0dc.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg-img">
        <div class="content">
    <div class="form">
        <h2>verify your account</h2>
        <p>we emailed you the four digit otp to enter the code below to confirm your email</p>
        <form action="" autocomplete="off">
            <div class="error-text"></div>
            <div class="fields-input">
                <input type="number" name="otp1" class="otp_field" placeholder="0" min="0" max="0" required onpaste="false">
                <input type="number" name="otp2" class="otp_field" placeholder="0" min="0" max="0" required onpaste="false">
                <input type="number" name="otp3" class="otp_field" placeholder="0" min="0" max="0" required onpaste="false">
                <input type="number" name="otp4" class="otp_field" placeholder="0" min="0" max="0" required onpaste="false">
            </div>
            <div class="submit">
                <input type="submit" value="verify Now" class="button">
            </div>
        </form>
    </div>
    </div>
    </div>
    <script src="./javascript/verify.js"></script>
</body>
</html>