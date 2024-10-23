<?php
session_start();
?>

<!DOCTYPE html>

<body>
    <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session Variables are set.";
    ?>
</body>

</html>