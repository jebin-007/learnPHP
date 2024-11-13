<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submit</title>
</head>
<body>
    <form action = "FormSubmit.php" method = "get">
        Name: <input type = "text" name = "name">
        Age: <input type = "number" name = "age">
        <input type="submit">

    </form>
    <p>Name is <?php echo $_GET["name"] ?> </p>
    <p>Age is <?php echo $_GET["age"] ?> </p>
</body>
</html>