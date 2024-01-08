

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

    <table border="1">

        <?php for ( $j = 0; $j < 6; $j++){?>
                <tbody>
                    <tr>
                        <?php for ( $i = 0; $i < 7; $i++){
                            if ($i %2 == 0){?>
                                    <th style="background: red">

                                    </th>
                            <?} else{ ?>
                                <th style="background: yellow"> </th>

                            <?}?>


                        <?php };?>
                    </tr>
                </tbody>
        <?php };?>
    </table>

</body>
</html>
