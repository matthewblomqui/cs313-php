<!DOCTYPE html>
<html lang="en">

<head>

    <title>Homepage CS313</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">

</head>

<body class="bg-light">
    <?php include 'header.php';?>

    <div class="container pt-3">
        <div class="row">
            <h2>Stretched Link in Card</h2>
            <p>Add the .stretched-link class to a link inside the card, and it will make the whole card clickable (the card will act as a link):</p>
            <div class="card" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php';?>
</body>


</html>
