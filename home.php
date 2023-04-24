<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UCL FS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 1200px;
            margin: 0 0 0 0;
        }
        table tr td:last-child{
            width: 120px;
        }
        h1 {
        text-align: center;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<h1> 2023-24 UCL Fantasy Soccer </h1>
<body>

<div class="wrapper">
    <ul class="nav nav-tabs">
    <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#Tab5">All Info</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#Tab1">Players</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#Tab2">Clubs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#Tab3">Leagues</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#Tab4">Stats</a>
  </li>
</ul>

<div class="tab-content">
<div id="Tab5" class="tab-pane fade">
    
    </div>

  <div id="Tab1" class="tab-pane fade show active">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Details</h2>
                        <a href="/players-php/create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Player</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM Players";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th> Player ID </th>";
                                        echo "<th> First Name </th>";
                                        echo "<th> Last Name </th>";
                                        echo "<th> Position </th>";
                                        echo "<th> Club ID </th>";
                                        echo "<th> Action </th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['playerID'] . "</td>";
                                        echo "<td>" . $row['firstName'] . "</td>";
                                        echo "<td>" . $row['lastName'] . "</td>";
                                        echo "<td>" . $row['position'] . "</td>";
                                        echo "<td>" . $row['clubID'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="players-php/update.php?id='. $row['playerID'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="players-php/delete.php?id='. $row['playerID'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    ?>
                </div>
            </div>        
        </div>
    </div>
</div>

<div id="Tab2" class="tab-pane fade">
    
</div>
<div id="Tab3" class="tab-pane fade">
    
</div>
<div id="Tab4" class="tab-pane fade">
    
</div>
</div>
</div>
</body>
</html>