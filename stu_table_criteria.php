<!-- Developed by Saurav Bajracharya and Pramesh Bajracharya -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Student Details Information.</title>
    <link rel="shortcut icon" href="bvc.png" type="image/x-icon" />
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="animate.css">

</head>

<body>

    <header id="topHead" class="animated fadeInDown">
        <a href="index.php"><h2>Student Information Sheet - BVCEC</h2></a>
        <a href="index.php"><img id="home" src="download.png" style="width : 65px ; height : 65px;"></a>
    </header>

    <div id="bodyMain">
        <br>
        <br>

        <?php
			include "functions.php";
			stu_table_criteria();

        ?>

    </div>
</body>

</html>
