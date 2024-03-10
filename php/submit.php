<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/templates.css">
    <link rel="stylesheet" href="../css/kontakt.css">
    <title>Contact</title>
</head>

<body>
    <h1>Thanks for the message!</h1>
    Name: <?= $_GET["name"] ?><br>
    Mail: <?= $_GET["email"] ?><br>
    Text: <?= $_GET["text"] ?>
</body>

</html>