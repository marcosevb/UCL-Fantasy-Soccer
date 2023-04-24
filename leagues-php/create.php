<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $leagueid = $_POST['leagueid'];

    $name = $_POST['name'];

    $country = $_POST['country'];

    $rank = $_POST['rank'];

    $sql = "INSERT INTO `Leagues`(`leagueID`, `name`, `country`, `rank`)  VALUES ('$leagueid','$name','$country','$rank')";

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
                <h2>Add League</h2>

                <form action="" method="POST">
                
                  <fieldset>
                
                    League ID:<br>
                
                    <input type="int" name="leagueid">
                
                    <br>
                
                    Name:<br>
                
                    <input type="text" name="name">
                
                    <br>
                
                    Country:<br>
                
                    <input type="text" name="country">
                
                    <br>
                
                    Rank:<br>
                
                    <input type="int" name="rank">
                
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