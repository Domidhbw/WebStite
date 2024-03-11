<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/templates.css">
</head>

<body>
    <?php include 'templates/header.php';  ?>
    <?php include 'templates/navPages.php';  ?>
    <div class="card"><?php
                        if (isset($_POST['difficulties']) && isset($_POST['explanation'])) {
                            $selected_difficulty = $_POST['difficulties'];
                            $explanation = $_POST['explanation'];
                            echo "<div class='output'>";
                            echo "<p class='difficulty'>Du hast die Schwierigkeit des Blogs eingestuft als:<br> $selected_difficulty</p><br>";
                            echo "<p class='explanation'>Deine Begründung:<br> $explanation</p>";
                            echo "</div>";
                        } else {
                            echo "<div class='output'>Keine Schwierigkeitsstufe ausgewählt oder keine Erklärung abgegeben.</div>";
                        }
                        ?>
    </div>
    <div class="spaceholder-feedback"></div>
    <?php include 'templates/footerPages.php'; ?>

</body>

</html>