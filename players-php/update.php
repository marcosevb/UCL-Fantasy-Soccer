<?php 

include "config.php";

    if (isset($_POST['update'])) {
        $user_id = $_GET['id']; 

        $playerid = $_POST['playerid'];

        $firstname = $_POST['firstname'];

        $lastname = $_POST['lastname'];

        $position = $_POST['position'];

        $clubid = $_POST['clubid'];

        $sql = "UPDATE `Players` SET `playerID`='$playerid',`firstName`='$firstname',`lastName`='$lastname',`position`='$position',`clubID`='$clubid' WHERE `playerID`='$user_id'"; 

        $result = $link->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `Players` WHERE `playerID`='$user_id'";

    $result = $link->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $playerid = $row['playerID'];

            $firstname = $row['firstName'];

            $lastname = $row['lastName'];

            $position = $row['position'];

            $clubid = $row['clubID'];

        }

    } else{ 
        header('Location: /home.php');
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
                <h2>Update Player</h2>

                <form action="" method="post">

                <fieldset>
                
                Player ID:<br>

                <input type="int" name="playerid" value="<?php echo $playerid; ?>">

                <br>

                First Name:<br>

                <input type="text" name="firstname" value="<?php echo $firstname; ?>">

                <br>

                Last Name:<br>

                <input type="text" name="lastname" value="<?php echo $lastname; ?>">

                <br>

                Position:<br>

                <input type="text" name="position" value="<?php echo $position; ?>">

                <br>

                Club ID:<br>

                <input type="int" name="clubid" value="<?php echo $clubid; ?>">

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