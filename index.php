<?php
require 'common.php';
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
        <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
            <h1 class="mb-3">Welcome,</h1>
            <p class="lead">
                To Your Battery Monitoring System Dashboard.
            </p>
            <div class="row mx-n2">
                <div class="col-md px-2">
                    <a href="data.php" class="btn btn-lg btn-outline-secondary w-100 mb-3">Battery</a>
                </div>
                <div class="col-md px-2">
                    <a href="cycle.php" class="btn btn-lg btn-outline-secondary w-100 mb-3" >Cycle</a>
                </div>
            </div>
        </div>
    </div>
</html>