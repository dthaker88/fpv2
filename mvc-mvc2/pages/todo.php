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


<form action="index.php?page=todo&action=register" method="post">
    Owner Email: <input type="text" name="owneremail" <?php $data->owneremail; <br>
    Owner ID: <input type="text" name="ownerid"><br>
    Due Date: <input type="text" name="duedate"><br>
    Message: <input type="text" name="message"><br>
    Is done?: <input type="text" name="isdone"><br>
    <input type="submit" value="Submit form">
</form>


<script src="js/scripts.js"></script>
</body>
</html>
