<?php
function verse($animal, $sound) {
    return "Old MacDonald had a farm, E I E I O,<br>
            And on his farm, he had a {$animal}, E I E I O.<br>
            With a {$sound} {$sound} here and a {$sound} {$sound} there,<br>
            Here a {$sound}, there a {$sound}, everywhere a {$sound} {$sound}.<br>
            Old MacDonald had a farm, E I E I O.<br><br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $animals = $_POST['animals'];
    $sounds = $_POST['sounds'];

    if (count($animals) == count($sounds)) {
        echo '<div class="container">';
        foreach ($animals as $index => $animal) {
            echo verse($animal, $sounds[$index]);
        }
        echo '</div>';
    } else {
        echo "Mismatched number of animals and sounds.";
    }
} else {
    echo "Invalid request method.";
}
?>
