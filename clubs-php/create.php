<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $clubid = $_POST['clubid'];

    $name = $_POST['name'];

    $location = $_POST['location'];

    $yearfounded = $_POST['yearfounded'];

    $leagueid = $_POST['leagueid'];

    $sql = "INSERT INTO `Clubs`(`clubID`, `name`, `location`, `yearFounded`, `leagueID`)  VALUES ('$clubid','$name','$location','$yearfounded','$leagueid')";

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
                <h2>Add Club</h2>

                <form action="" method="POST">
                
                  <fieldset>
                
                    Club ID:<br>
                
                    <input type="int" name="clubid">
                
                    <br>
                
                    Name:<br>
                
                    <input type="text" name="name">
                
                    <br>
                
                    Location:<br>
                
                    <input type="text" name="location">
                
                    <br>
                
                    Year Founded:<br>
                
                    <input type="int" name="yearfounded">
                
                    <br>

                    League ID:<br>
                
                    <input type="int" name="leagueid">
                
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