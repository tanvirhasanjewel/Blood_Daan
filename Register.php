<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='Register.css'>
    <link rel="icon" href='./image/bb_logo(black).png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<title>Start Saving Lives </title>
<body>
<header>
    <nav>
    <div class="header-logo"><img src="./image/bb_logo(black).png"></div>
    <div class="header-list">
        <ul>
            <li><a href="Register.php" target="_blank"> Register</a></li>
            <li><a href="request.php">Blood Request</li></a>
            <li><a href="index.php#vol-sect">Index</li></a>
            <li><a href="index.php#about-us">About Us</a></li>
            </ul>
    </div>
    </nav>
</header>
<?php include 'connection.php'; ?>
<div class="inner">
    <div class="photo">
        <img src="./image/regphoto.png">
    </div>
    <div class="user-form">
        <h1>Start Saving Lives</h1>
        <form action="Register.php" method="post" enctype="multipart/form-data">
            <i class="fas fa-user icon"></i>
            <input type="text" name="name" placeholder="Name">
            <br>
            <i class="fas fa-book-medical icon"></i>
            <input type="text" name="Blood_Group" placeholder="Blood_Group">
            <br>
            <i class="fas fa-location-arrow icon"></i>
            <input type="text" name="Location" placeholder="Location">
            <br>
            <i class="fas fa-file-contract icon"></i>
            <input type="text" name="Contact_Number" placeholder="Contact_Number">
            <br>
            <i class="fas fa-envelope-square"></i>
            <input type="email" name="Email" placeholder="Email">
            <br>
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" id="password_data">
            <div class="safety" style="font-family: sans-serif; font-size: 20px;">
            </div>
            Select image to upload:
                <input type="file" name="image">
            <div class="action-btn">
                <button class="btn primary" name="Submit">Registration</button>
            </div>
        </form>
    </div>
</div>
<?php
if(isset($_POST["Submit"])) {
$name = $_POST['name'];
$Blood_Group = $_POST['Blood_Group'];
$Location = $_POST['Location'];
$Contact_Number = $_POST['Contact_Number'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType =  strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    $image = $_FILES['image'];
    $img_loc =  $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $path = "uploads/".$img_name;
    move_uploaded_file($img_loc,$path);

$sql ="INSERT INTO registration(name,Blood_Group,Location,Contact_Number,Email,Password,Img_source)
VALUES('$name','$Blood_Group','$Location','$Contact_Number','$Email','$Password','$path')";
if(mysqli_query($con ,$sql)){
    echo "YOUR ACCOUNT CREATED SUCCESSFULLY";
  }
else{
     echo "Failed!!!<br>".mysqli_error($con);
    }
}
?>
</body>
</html>
