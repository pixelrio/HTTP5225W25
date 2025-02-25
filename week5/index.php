<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    //connection string
    $connect = mysqli_connect('localhost', 'root', 'password', 'colors');

    if(!$connect){
      die("Connection Failed:" . mysqli_connect_error());
    }

    $query = "SELECT * FROM colors";
    $colors = mysqli_query($connect, $query);

    echo '<pre>' . print_r($colors) . '</pre>';



  ?>

  <div style="width: 100%; height: 100px; background-color:aqua; text-align: center;">
    Aqua Marine
  </div>
  <div style="width: 100%; height: 100px; background-color:black; text-align: center;">
    Black
  </div>
  <div style="width: 100%; height: 100px; background-color:red; text-align: center;">
    Red
  </div>
</body>
</html>