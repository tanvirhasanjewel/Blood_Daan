<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='request.css'>
    <link rel="icon" href='./Image/bb_logo(black).png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<title>Find Blood </title>
<body>
<header>
    <nav>
    <div class="header-logo"><img src="./Image/bb_logo(black).png"></div>
    </nav>
</header>
<?php include 'connection.php'; ?>
<div class="inner">
    <div class="photo">
        <img src="./Image/blood.jpg">
    </div>
    <div class="user-form">
        <h1>Find Blood Donors Near You</h1>
        <form action="search.php" method="post">
            <i class="fas fa-book-medical icon"></i>
            <input type="text" name="Blood_Group" placeholder="Blood_Group">
            <br>
            <i class="fas fa-location-arrow icon"></i>
            <input type="text" name="Location" placeholder="Location">
            <br>
            <div class="action-btn">
                <button class="btn primary">Find</button>
            </div>
        </form>
    </div>
</div>
<script src="./request.js"></script>
</body>
</html>