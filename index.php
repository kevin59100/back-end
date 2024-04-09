<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<form action="monscript.php"id="form" id="formulary" method="POST">
        <h1>Vos coordonnées :</h2>
          
            <p><label>E-mail : </label>
                <input type="text" name="mail" id="mail" /><sup>*</sup>
            </p>
            <p><label>Téléphone : </label>
                <input type="text" name="phone" id="phone" />
            </p>
          


      

            <input type="submit" value="Envoyer" id="send">
            <input type="reset" value="Effacer" id="reset">
            </p>

    </form> 


    <?php
   /* $a=1;
    while($a<150){
        if($a%2!=0)
        echo $a."<br>";
    $a++;
    }

    for($a=1;$a<500;$a++){
        echo "Je dois faire des
        sauvegardes régulières de mes fichiers.";
    }

    for($a=1;$a<12;$a++){
        for($j=1;$j<12;$j++){
            $produit=$a*$j;
            echo "$a x $j=$produit <br>";
        }
        echo "\n";
    }
*/

/*$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
"", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
"Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"),
"19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
"Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage",
"Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""),
"19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
"Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
"Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation")
);
var_dump($a);

$semaine_validation = array_search("Validation",$a["19002"]);
echo" la semaine de validation est $semaine_validation.";
echo "<br>";
$occurence= array_search("Stage",array_reverse($a["19001"]));
echo  $occurence+1;
echo "<br>";
print_r(array_keys($a));

$compte=count(array_keys($a["19003"],"Stage"));
echo$compte;
echo "<br>";
function calculator ($n1,$n2,$calculer){
    switch($calculer){
        case"addition":
        $result= $n1+$n2;
        echo $result;
        break;
        case"Substraction";
        $result=$n1-$n2;
        echo $result;
        break;
        case"multiplication";
        $result=$n1*$n2;
        echo $result;
        break;
        case"division";
        $result=$n1/$n2;
        if($n2==0);
        else {echo "opération impossible";};
        echo $result;
        break;
        }
    }
    calculator(6,2,"Substraction");
    echo "<br>";
    $date=strtotime('2019-07-14');
    echo date("W",$date);
    echo "<br>";
   /* $date = new DateTime("2019-07-14");
$num_semaine = $date->format("W");
echo "Le numéro de semaine pour la date 14/07/2019 est : $num_semaine";*/

/*$date1=new DateTime("2024-04-09");
$date2=new DateTime("2024-08-09");
$diff=date_diff($date1,$date2);
echo $diff->days;
echo "<br>";

$date = new DateTimeImmutable('2023-01-01');
echo $date->format('L');
echo "<br>";


$mois  = 12;
$jour  = 31;
$annee = 2019;
if (checkdate($mois, $jour, $annee)) {
echo "La date $jour/$mois/$annee existe bien";
} else {
echo "La date $jour/$mois/$annee n'est pas valide";
}
echo "<br>";

echo date("H\hi");
echo "<br>";


$date = new DateTime();
$date->modify('+1 month');
echo $date->format('Y-m-d');
echo "<br>";

$date=date('d/m/y H:i:s',1000200000);
echo $date;*/
// $sites=file_get_contents("liens.txt");
// echo $sites;

// $customers=file("customers.csv");
// echo "<table class='table table-bordered'>";
// //parcourir chaque lignes du fichier
// foreach($customers as $lign){
//     /*echo $lign ."<br>";*/
//     //Diviser la lignes en utilisant la virgule comme séparateur
//     $colonnes=explode(",",$lign);
//     //début de la ligne du tableau
//     echo "<tr>";
//     //afficher chaque colonne
//     foreach($colonnes as $colonne){
//         echo "<td>".$colonne ."</td>";
//     } echo "</tr>";
// }
// echo "</table>";





    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>