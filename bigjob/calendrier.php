<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

    <nav class="bg-primary d-flex justify-content-center align-items-center" style="min-height: 50px;">
        <a href="index.php" class="text-white text-decoration-none me-3">Accueil</a>
    </nav>


    <main>

<div>

    <h1 class="planning_title">Calendrier <?php echo $day_week = date('Y', time()); ?></h1>
    <h2>Semaine <?php echo $day_week = date('W', time()); ?></h2>
            
        <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Lundi <?php echo $day_week = date('d/m', strtotime('monday this week')); ?></th>
                        <th>Mardi <?php echo $day_week = date('d/m', strtotime('tuesday this week')); ?></th>
                        <th>Mercredi <?php echo $day_week = date('d/m', strtotime('wednesday this week')); ?></th>
                        <th>Jeudi <?php echo $day_week = date('d/m', strtotime('thursday this week')); ?></th>
                        <th>Vendredi <?php echo $day_week = date('d/m', strtotime('friday this week')); ?></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    for ($heure = 8; $heure <= 19; $heure++)
                    {
                        ?>
                        <tr>
                            <td>
                                <p><?php echo $heure . "h"; ?></p>
                            </td>
                            <?php
                            for ($day = 1; $day <= 5; $day++)
                        {

                                if (!empty($info_resa)) {
                                    foreach ($info_resa as $resa => $Hresa)
                                    {
                                        $JH = explode(" ", $Hresa["debut"]);

                                        $H = explode(":", $JH[1]);
                                        $heure_resa = date("G", mktime($H[0], $H[1], $H[2], 0, 0, 0));

                                        $J = explode("-", $JH[0]);
                                        $day_resa = date("N", mktime(0, 0, 0, $J[1], $J[2], $J[0]));

                                        $case_resa = $heure_resa . $day_resa;
                                        $case = $heure . $day;


                                        $titre = $Hresa["titre"];
                                        $login = $Hresa["login"];
                                        $desc = $Hresa["description"];
                                        $id = $Hresa["id"];

                                        if ($case == $case_resa) { ?>
                                            <td>
                                                <a class="reservation_date" href="autorisation.php?evenement=<?php echo $id; ?>">
                                                    <?php echo $login; ?><br>
                                                    <?php echo $titre; ?><br>
                                                    <?php echo "Voir la Réservation"; ?>
                                                </a>
                                            </td>
                                        <?php
                                            break;
                                        } else
                                        {
                                            $case = null;
                                        }
                                    }
                                    if ($case == null) {
                                        ?>
                                        <td><a class="reservation_date" href="autorisation.php?heure_debut=<?php echo $heure; ?>&amp;date_debut=<?php echo $day; ?>">Réserver</a></td>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <td><a class="reservation_date" href="autorisation.php?heure_debut=<?php echo $heure; ?>&amp;date_debut=<?php echo $day; ?>">Réserver</a></td>
                                <?php
                                }
                            } ?>
                                </tr>
                                <?php
                    }
                    ?>
                </tbody>
            </table>

    </div>

</main>

    <script src="./js/script.js"></script>
</body>

</html>