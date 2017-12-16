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


<form action="index.php?page=tasks&action=create" method="post">
   <!-- <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="owneremail" class="form-control" id="exampleInputEmail1" placeholder="Email" <?php /*$data->owneremail; */?>>
    </div>-->


    Owner Email: <input type="text" name="owneremail" value = "<?php echo $data -> owneremail; ?>"><br>
    Due Date: <input type="text" name="duedate" value = "<php echo $data->duedate; ?>"><br>
    Message: <input type="text" name="message" value = "<php echo $data->message; ?>"><br>
    Is done?: <input type="text" name="isdone" value = "<php echo $data->isdone; ?>"><br>
    <input type="submit" value="Submit form">
</form>

<!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/jquery.min.js.download"></script>
   <script src="bootstrap/bootstrap.min.js.download"></script>


<script src="js/scripts.js"></script>
</body>
</html>
