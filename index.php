<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snack-b1</title>
</head>
<body>
    
    <?php

        //PRIMO SNACK

        $arr = [

            0  => ['firstTeam' => 'Milano', 'secondTeam' => 'Bologna', 'firstScore' => '14','secondScore' => '68'],

            1 => ['firstTeam' => 'Venezia', 'secondTeam' => 'Sassari', 'firstScore' => '42','secondScore' => '46'],

            2 => ['firstTeam' => 'Roma', 'secondTeam' => 'Trieste', 'firstScore' => '37','secondScore' => '54'],

        ];
        
        for ($i=0; $i < count($arr); $i++) { 

            echo $arr[$i]['firstTeam'] . ' - ' . $arr[$i]['secondTeam'] . ' | ' .
            $arr[$i]['firstScore'] . ' - ' . $arr[$i]['secondScore'] . '</br>';

        }

        //SECONDO SNACK

        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];


        if (strlen($name) > 3 && str_contains($email, '@') === true && str_contains($email, '.') === true  &&  is_numeric($age) === true) {

            echo 'Accesso riuscito';

        } else {

            echo 'Accesso negato';
        }

    ?>
    

</body>
</html>