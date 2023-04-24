<?php 

include "config.php";

    if (isset($_POST['update'])) {
        $user_id = $_GET['id']; 

        $clubid = $_POST['clubid'];

        $name = $_POST['name'];

        $location = $_POST['location'];

        $yearfounded = $_POST['yearfounded'];

        $leagueid = $_POST['leagueid'];

        $sql = "UPDATE `Clubs` SET `clubID`='$clubid',`name`='$name',`location`='$location',`yearFounded`='$yearfounded',`leagueID`='$leagueid' WHERE `clubID`='$user_id'"; 

        $result = $link->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `Clubs` WHERE `clubID`='$user_id'";

    $result = $link->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $clubid = $row['clubID'];

            $name = $row['name'];

            $location = $row['location'];

            $yearfounded = $row['yearFounded'];

            $leagueid = $row['leagueID'];

        }

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
                <h2>Update Club</h2>

                <form action="" method="post">

                <fieldset>
                
                Club ID:<br>

                <input type="int" name="clubid" value="<?php echo $clubid; ?>">

                <br>

                Name:<br>

                <input type="text" name="name" value="<?php echo $name; ?>">

                <br>

                Location:<br>

                <input type="text" name="location" value="<?php echo $location; ?>">

                <br>

                Year Founded:<br>

                <input type="int" name="yearfounded" value="<?php echo $yearfounded; ?>">

                <br>

                League ID:<br>

                <input type="int" name="leagueid" value="<?php echo $leagueid; ?>">

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