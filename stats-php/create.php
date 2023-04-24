<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $playerid = $_POST['playerid'];

    $appearances = $_POST['appearances'];

    $goals = $_POST['goals'];

    $assists = $_POST['assists'];

    $cleansheets = $_POST['cleansheets'];

    $sql = "INSERT INTO `Stats`(`playerID`, `appearances`, `goals`, `assists`,`cleansheets`)  VALUES ('$playerid','$appearances','$goals','$assists','$cleansheets')";

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
                <h2>Add Stats</h2>

                <form action="" method="POST">
                
                  <fieldset>
                
                    Player ID:<br>
                
                    <input type="int" name="playerid">
                
                    <br>
                
                    Appearances:<br>
                
                    <input type="int" name="appearances">
                
                    <br>
                
                    Goals:<br>
                
                    <input type="int" name="goals">
                
                    <br>
                
                    Assists:<br>
                
                    <input type="int" name="assists">
                
                    <br>
                    Clean Sheets:<br>
                
                    <input type="int" name="cleansheets">
                
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