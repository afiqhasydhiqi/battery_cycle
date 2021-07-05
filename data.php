<?php
require 'common.php';

//Grab all the data users from our database
$battery_data = $database->select("battery_data", [
    'No.',
    'Battery_ID',
    'Name'
]);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Battery Monitoring System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Battery Monitoring System</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="cycle.php" class="nav-link">View Cycle</a>
            </li>
            <li class="nav-item">
                <a href="data.php" class="nav-link active">View Battery</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <h2>Battery Data</h2>
        </div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Battery_ID</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Loop through and list all the information of each user including their Battery_ID
                foreach($battery_data as $user) {
                    echo '<tr>';
                    echo '<td scope="row">' . $user['No.'] . '</td>';
                    echo '<td>' . $user['Battery_ID'] . '</td>';
                    echo '<td>' . $user['Name'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</html>