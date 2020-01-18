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

    <div class="text-center pt-3">
        <h2>Home</h2>
    </div>
    
    <hr>

    <div class="container p-3">
        <div class="card-columns">

            <div class="card length">
                <img class="card-img-top" src="chalkboard_web.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Introduction Page</h4>
                    <p class="card-text">This is an introduction about me - Matthew Blomquist</p>
                    <a href="intro.php" class="btn btn-secondary stretched-link">Go To</a>
                </div>
            </div>

            <div class="card length">
                <img class="card-img-top" src="assignments.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Assignments</h4>
                    <p class="card-text">Here are the assignments I will be working on during the semester</p>
                    <a href="#" class="btn btn-secondary stretched-link">Go To</a>
                </div>
            </div>

            <div class="card length">
                <img class="card-img-top" src="machineLearning.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Future Projects</h4>
                    <p class="card-text">These will send you to the projects. They are not here yet...</p>
                    <a href="#" class="btn btn-secondary stretched-link">Coming Soon</a>
                </div>
            </div>

        </div>
    </div>


    <?php include 'footer.php';?>
</body>


</html>
