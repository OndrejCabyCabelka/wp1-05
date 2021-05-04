

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezdomove na nadraží</title>
</head>
<body>

<?php
$vodkaprice = "119kč" ;
$homelessMoney = + "17" + "40" + "100" - "50" ;


echo "Cena vodky:" . $vodkaprice . "<br>" ;

echo "Peníze bezdomovce před návštěvou večerky: " . $homelessMoney . "<br>";
if ($homelessMoney < $vodkaprice ) {echo "Ještě nemáš peníze na vodku";}
if ($homelessMoney > $vodkaprice) {echo "Mužeš si jít pro vodku";}

echo "<br>Peníze bezdomovce po návštěvě večerky: " . $homelessMoney . "<br>";
?>

</body>
</html>
