
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Puissances 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="block">


        <div class="joueur_1">
            <h1>Joueur 1</h1>
            <form action="play.php" method="post">
                <input type="hidden" name="joueur" value='1'>

                <select name="colonne">
                    <option value="0">1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    <option value="5">6</option>
                    <option value="6">7</option>
                </select>
                <input type="submit" name="jouer" value="Jouer">
            </form>
        </div>
        <div class="joueur_2">
            <h1>Joueur 2</h1>
            <form action="play.php" method="post">
                <input type="hidden" name="joueur" value='2'>

                <select name="colonne">
                    <option value="0">1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    <option value="5">6</option>
                    <option value="6">7</option>
                </select>
                <input type="submit" name="jouer" value="Jouer">
            </form>
        </div>
</div>



    <table>

        <?php //Sa me permet de faire une boucle en php qui va générer l'axe y
            for ( $j = 0; $j < 7; $j++){
                ?>

                    <tr>
                        <?php
                        /**
                         * Sa me permet de faire une boucle en php
                         * qui va générer l'axe x
                         *
                         * Avec l'array contenue dans $_SESSION['ram']
                         * et en fonction de l'axe x ou y sa affiche un rond rouge ou jaune
                         * en fonction du joueur.
                         */
                        for ( $i = 0; $i < 6; $i++){

                            ?>
                                    <td class="<?= 'j'. $_SESSION["ram"][$i][$j]; ?>">

                                    </td>
                        <?php };?>
                    </tr>

        <?php };?>
    </table>
    <form action="save.php" method="post">
        <input type="submit" name="save" value="save">

    </form>

</body>
</html>
