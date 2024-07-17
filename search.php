<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="search.css">
  <title>Search Blood</title>
  <link rel="icon" href='.Image/bb_logo(black).png'/ type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header>
    <nav>
      <div class="header-logo"><img src="./Image/bb_logo(black).png" width: 40%;></div>
      <div class="header-list"></div>
    </nav>
  </header>
  
<?php include 'connection.php'; 
    $Blood_Group = $_POST['Blood_Group'];
    $Location = $_POST['Location'];
   $sql ="SELECT * FROM registration WHERE Blood_Group = '$Blood_Group' and 
           Location = '$Location' LIMIT 1";
   $result = mysqli_query($con, $sql); 
  
?>
  <H1 style="color: rgb(253, 242, 204);background-color: rgb(93, 33, 150);word-spacing: 5px;text-align:center;">Your Details</H1><br>
  <table>

 
    <?php 
 if ($row = mysqli_fetch_assoc($result)): ?>
     <section class="dvd">
    <div class="avatar" id="avatar">
      <div class="w-24 rounded-full">
      <?php 
    echo "<img src=".$row['Img_source']." />";
    ?>
     </div>
    </div>
    <div class="card-body">
      <p class="mb-0"><strong class="pr-1">Donor Name :</strong><?php echo $row['name']; ?></p>
      <p class="mb-0"><strong class="pr-1">Blood Group :</strong><?php echo $row['Blood_Group']; ?></p>
      <p class="mb-0"><strong class="pr-1">Location :</strong><?php echo $row['Location']; ?></p>
      <p class="mb-0"><strong class="pr-1">Contact Number :</strong><?php echo $row['Contact_Number']; ?></p>
    <div class="text-box"><br>
      <a class="hero-btn" target="_blank">Contact</a>
    </div>
    </div>
  </section>
  <?php endif ?>
  <?php 
   $row =mysqli_fetch_array($result);
   if(mysqli_num_rows($result)<1){
    echo "<h1>Invalid username or password.That's why we can't find any details.</h1>";
}
?> 
 
<hr>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>