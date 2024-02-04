<?php
    session_start();

/**
 * session_start(); me permet de créer une atribut $_SESSION qui va contenir
 * un array qui contient des valeurs vide, mais aussi sa va me permet de l'appeler n'importe où.
 *
 * $_SESSION['ram'] me sert à stocker les coups des deux joueurs,
 * en remplacent le null par une valeur soit 1 ou 2.
 *
 * 1 correspond le joueur 1 et 2 correspond corespond joueur 2.
 *
 * require_once me permete d'afficher le html du fichier grid.php.
 */

    $_SESSION['ram'] = [
        [null,null,null,null,null,null,null],
        [null,null,null,null,null,null,null],
        [null,null,null,null,null,null,null],
        [null,null,null,null,null,null,null],
        [null,null,null,null,null,null,null],
        [null,null,null,null,null,null,null]

    ];



require_once("grid.php");
?>