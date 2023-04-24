<?php 

include "config.php";

    if (isset($_POST['update'])) {
        $user_id = $_GET['id']; 

        $playerid = $_POST['playerid'];

        $appearances = $_POST['appearances'];

        $goals = $_POST['goals'];

        $assists = $_POST['assists'];

        $cleansheets = $_POST['cleansheets'];

        $sql = "UPDATE `Stats` SET `playerID`='$playerid',`appearances`='$appearances',`goals`='$goals',`assists`='$assists',`cleanSheets`='$cleansheets' WHERE `playerID`='$user_id'"; 

        $result = $link->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `Stats` WHERE `playerID`='$user_id'";

    $result = $link->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $playerid = $row['playerID'];

            $appearances = $row['appearances'];

            $goals = $row['goals'];

            $assists = $row['assists'];

            $cleansheets = $row['cleanSheets'];

        }

    } else{ 
        header('goals: /home.php');
    } 

}
?>  
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                <h2>Update player</h2>

                <form action="" method="post">

                <fieldset>
                
                Player ID:<br>

                <input type="int" name="playerid" value="<?php echo $playerid; ?>">

                <br>

                Appearances:<br>

                <input type="int" name="appearances" value="<?php echo $appearances; ?>">

                <br>

                Goals:<br>

                <input type="int" name="goals" value="<?php echo $goals; ?>">

                <br>

                Assists:<br>

                <input type="int" name="assists" value="<?php echo $assists; ?>">

                <br>
                Clean Sheets:<br>

                <input type="int" name="cleansheets" value="<?php echo $cleansheets; ?>">

                <br>
                <p>  </p>
                <input type="submit" value="Update" name="update">

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