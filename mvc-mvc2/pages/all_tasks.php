<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<a href="index.php?page=tasks&action=create">Create Task</a>


<?php
//this is how you print something

if ($data == false) {

    echo '<p> There is currently no tasks. Please add a task. </p>';
}
else {
    print utility\htmlTable::genarateTableFromMultiArray($data);
}


?>


<script src="js/scripts.js"></script>
</body>
</html>