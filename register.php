<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/91e6b6d0dc.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg-img">
        <div class="content">
    <div class="form">
        <h2>Signup Form</h2>
        
        <p>Please Sign in to continue!</p>
<form action="">
    <div class="error-text">error</div>
        <div class="grid-details">
            <div class="input">
                <label for="">first name</label>
                <input type="text" name="fname" placeholder="first name" required pattern="[a-zA-Z'-'\s]*">
            </div>

            <div class="input">
                <label for="">Last name</label>
                <input type="text" name="lname" placeholder="last name" required pattern="[a-zA-Z'-'\s]*">
            </div>

           
        </div>
        <div class="grid-details">
            <div class="input">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="last name" required >
            </div>

            <div class="input">
                <label for="">phone</label>
                <input type="phone" name="phone" placeholder="phone number" required pattern="[0-9]{10}" oninvalid="this.setCustomValidity('enter 10 digit number')" oninput="this.setCustomValidity('')">
            </div>
        </div>


       <div class="grid-details">
            <div class="input">
                <label for="">Password</label>
                <input type="password" name="pass" placeholder="password" required>
            </div>

            <div class="input">
                <label for="">Confirm password</label>
                <input type="password" name="cpass" placeholder="confirm password" required>
            </div>
        </div>
        <div class="profile-img">
            <div class="file-upload">
                <input type="file" id="image-preview" name="image" class="file-input" required oninvalid="this.setCustomValidity('Select an image')" oninput="this.setCustomValidity('')" >
                <i class="fa-solid fa-user-pen"></i>
            </div>
        </div>
        <div class="submit">
            <input type="submit" value="signup Now" class="button">
        </div>
</form>

   <div class="link">Already signed up? <a href="login.php">login now</a></div>
    </div>
    </div>
    </div>

    <script src="./javascript/register.js"></script>
</body>

</html>