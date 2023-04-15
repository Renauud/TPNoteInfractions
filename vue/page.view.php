<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vue/style/style_page.css">
    <title>Liste infractions</title>
</head>
<body>

    <fieldset>
        <h1>
            <?= $mode ?>
            des infractions
        </h1>

        <h2>
                Bonjour
            <?= $identite . "," ?>
            <?php
                if($identite == "Administrateur"){
                    echo "voici la liste des infractions :";
                }else{
                    echo "voici vos infractions :";
                }
            ?>
        </h2>

        <table border=1px solid black>
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
                    echo "<td>" . "<input type=submit class='bouton_bleu' value='Détail'>";
                    echo "<form method='POST' action='detail.php'>";
                    echo "</td>";
                    echo "<td>" . $value["inf"] . "</td>";
                    echo "<td>" . $value["date"] . "</td>";
                    echo "<td>" . $value["no_immat"] . "</td>";
                    echo "<td>" . $value["no_permis"] . "</td>";
                    echo "<td>" . $value["total"] . "</td>";
                    if($identite == "Administrateur") {
                        echo "<form method='POST' action='ajouter.php'>";
                        echo "<td> <input type=submit class='bouton_bleu' value='Modifier'></td>";
                        echo "<td><input type='button' name='delInf' class='bouton_rouge' id='delInf' value='Supprimer'></td>";
                    }
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

</body>
</html>