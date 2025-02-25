<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 4</title>
</head>
<body>
  <?php
    // Function to fetch user data from the JSONPlaceholder API
    function getUsers() {
      $url = "https://jsonplaceholder.typicode.com/users";
      $data = file_get_contents($url);
      return json_decode($data, true);
    }
    // Get the list of users
    $users = getUsers();

    for($x=0; $x < count($users); $x++){
      echo $users[$x]['name'] . "<br>";
      echo '<a href="mailto:' . $users[$x]['email'] . '">' . $users[$x]['email'] . '</a><br>';
    }


  ?>
</body>
</html>