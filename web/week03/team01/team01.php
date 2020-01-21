<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="tuesdayPost.php" method="post">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="emailForPHP" class="form-control" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="passwordForPHP" class="form-control" placeholder="Enter password" id="pwd">
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Computer Science
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Web Design and Development
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Computer information Technology
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Computer Engineering
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
