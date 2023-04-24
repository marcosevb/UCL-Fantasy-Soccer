<?php 

include "config.php";

    if (isset($_POST['update'])) {
        $user_id = $_GET['id']; 

        $leagueid = $_POST['leagueid'];

        $name = $_POST['name'];

        $country = $_POST['country'];

        $rank = $_POST['rank'];

        $sql = "UPDATE `Leagues` SET `leagueID`='$leagueid',`name`='$name',`country`='$country',`rank`='$rank' WHERE `leagueID`='$user_id'"; 

        $result = $link->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `Leagues` WHERE `leagueID`='$user_id'";

    $result = $link->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $leagueid = $row['leagueID'];

            $name = $row['name'];

            $country = $row['country'];

            $rank = $row['rank'];

        }

    } else{ 
        header('country: /home.php');
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
                <h2>Update League</h2>

                <form action="" method="post">

                <fieldset>
                
                League ID:<br>

                <input type="int" name="leagueid" value="<?php echo $leagueid; ?>">

                <br>

                Name:<br>

                <input type="text" name="name" value="<?php echo $name; ?>">

                <br>

                Country:<br>

                <input type="text" name="country" value="<?php echo $country; ?>">

                <br>

                Rank:<br>

                <input type="int" name="rank" value="<?php echo $rank; ?>">

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