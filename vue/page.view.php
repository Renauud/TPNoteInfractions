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
        <h1>
            <?= $mode ?>
            des infractions
        </h1>
        <h2>
                Bonjour
            <?= $identite ?>
        </h2>

        <table border = 1px solid black>
            <thead>
            <th id="detail"></th>
            <th>N°</th>
            <th>Date</th>
            <th>Véhicule</th>
            <th>Conducteur</th>
            <th>Total</th>
            <th id="modifier"></th>
            <th id="supprimer"></th>
            </thead>

            <tbody>
            <form method="POST" action>
                <?php
                    foreach ($var as $key => $value) {
                        echo "<tr>";
                        echo "<td>" . "<input type=submit value='Détail'>";
                        echo "<form method='POST' action='detail.php'>";
                        echo "</td>";
                        echo "<td>" . $value["inf"] . "</td>";
                        echo "<td>" . $value["date"] . "</td>";
                        echo "<td>" . $value["no_immat"] . "</td>";
                        echo "<td>" . $value["no_permis"] . "</td>";
                        echo "<td>" . $value["total"] . "</td>";
                        echo "<form method='POST' action='ajouter.php'>";
                        echo "<td> <input type=submit value='Modifier'></td>";
                        echo "<td><input type='button' value='Supprimer'></td>";
                        echo "</tr>";
                    }
                ?>
            </form>
            </tbody>
             <tfoot>
                <td colspan=100%><a href="../vue/ajouter.view.php">Ajouter</a></td>
             </tfoot>
        </table>

    </fieldset>

    </form>
</body>
</html>