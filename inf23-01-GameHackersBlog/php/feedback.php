<?php
if (isset($_POST['difficulties']) && isset($_POST['explanation'])) {
    $selected_difficulty = $_POST['difficulties'];
    $explanation = $_POST['explanation'];
    echo "Die ausgewählte Schwierigkeitsstufe ist: $selected_difficulty <br>";
    echo "Deine Erklärung: $explanation";
} else {
    echo "Keine Schwierigkeitsstufe ausgewählt oder keine Erklärung abgegeben.";
}
