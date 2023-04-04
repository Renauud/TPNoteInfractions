<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste infractions</title>
</head>
<body>
    <form method="post" action="page.php">

    <fieldset>
        <?php
            if($mode === "admin"){
                $a = "Les";
            }elseif ($mode === "conducteur"){
                $a = "Vos";
            }
            echo "<h1>" . $a . " infractions : " . "</h1>";
            echo "<p> Bonjour " . $req_np["nom"] . " !"
        ?>
        <table>
            <?php

            ?>
        </table>
    </fieldset>

    </form>
</body>
</html>