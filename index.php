<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Asset/style.css">
    <title>Student</title>
</head>
<body>
    <div class="container">
        <table class="tableContainer">
            <caption class="title">List of Students</caption>
                <div class="all-elements">
                    <thead class="index">
                        <tr>
                            <th>Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Schooling</th>
                        </tr>
                    </thead>
                    <tbody class="elements">
                        <?php require("insertion_datas.php"); ?>
                    </tbody>
                </div>
        </table>
    </div>
</body>
</html>