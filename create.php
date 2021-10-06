<?php
    require_once("functions.php");
    if (count($_POST) == 0) { //check if user "post" anything
        //process information here
        echo "Nothing here!";
        die();
    }
    $author_name = [$_POST['first'],$_POST['last']];
    $author_index = findAuthor($authors, $author_name);
    $quotes[] = [$_POST['quote'], $author_index];
    write_csv($quotes,'quotes.csv');
    $author_name[] =$author_index;
    $authors[] = $author_name;
    write_csv($authors,'authors.csv');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User is deleted</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="assets/css/modify.css" />
</head>

<body>
<div id="modify">
    <div class="container background">
        <img src="assets/images/delete.png" class="img-fluid img-background" style="padding-top: 10vh; max-width: 40%" alt="">
    </div>
    <div class="modify">
        <div class="modify-404">
            <h1>200</h1>
        </div>
        <h2>Quote has been added! Thank you for your submission!</h2>
        <p>Redirecting to homepage in <span id="countdown">5</span> seconds...</p>
        <a href="index.php">Back To Homepage</a>
    </div>
</div>
<script type="text/javascript">
    let seconds = 5;
    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            window.location = "./index.php";
        } else {
            document.getElementById("countdown").innerHTML = seconds;
            window.setTimeout("countdown()", 1000);
        }
    }
    countdown();
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</body>

</html>