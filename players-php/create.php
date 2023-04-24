<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $playerid = $_POST['playerid'];

    $firstname = $_POST['firstname'];

    $lastname = $_POST['lastname'];

    $position = $_POST['position'];

    $clubid = $_POST['clubid'];

    $sql = "INSERT INTO `Players`(`playerID`, `firstName`, `lastName`, `position`, `clubID`) VALUES ('$playerid','$firstname','$lastname','$position','$clubid')";

    $result = $link->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $link->close(); 

  }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <h2>Add Player</h2>

                <form action="" method="POST">
                
                  <fieldset>
                
                    Player ID:<br>
                
                    <input type="int" name="playerid">
                
                    <br>
                
                    First Name:<br>
                
                    <input type="text" name="firstname">
                
                    <br>
                
                    Last Name:<br>
                
                    <input type="text" name="lastname">
                
                    <br>
                
                    Position:<br>
                
                    <input type="text" name="position">
                
                    <br>

                    Club ID:<br>
                
                    <input type="int" name="clubid">
                
                    <br>
                    <p> </p>
                    <input type="submit" name="submit" value="submit">
                
                  </fieldset>
                
                </form>
                <p> </p>
                <p><a href="/home.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>