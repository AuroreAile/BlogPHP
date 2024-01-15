<?php 

$firstName = "John";
$age = 12;
$prix = 12.5;


/*if ($age >= 18) {
    echo "Vous êtes majeur";
} elseif ($age >= 13) {
    echo "Vous êtes ado";
}

else {
    echo "Vous êtes mineur";

}
*/
?>

<h1> Test titre 1</h1>

<?php
//echo "<h1> Test titre 1</h1>";

//tableau simple
$fruits = ["pomme", "poire", "banane"];
foreach ($fruits as $key => $value) {
   echo "<h2>$value</h2>";
}

//tableau associatif key => value
$utilisateur =["nom"=>"DUPONT", "prenom"=>"John", "age"=>26];
//echo $utilisateur['nom'] . ' ' . $utilisateur['prenom'] . ' ' . $utilisateur['age'];

//tableau multidimensionnel
$utilisateurs = [
    ["nom"=>"DUPONT", "prenom"=>"John", "age"=>26],
    ["nom"=>"MARTIN", "prenom"=>"Jean", "age"=>36],
    ["nom"=>"PERRIER", "prenom"=>"Paul", "age"=>46]
];
//echo $utilisateurs[1]["prenom"];

//dans foreach variable avec un s et pour value utilisateur sans s
foreach ($utilisateurs as $key => $utilisateur) {?>

    <p><?php echo $utilisateur["nom"]." ".$utilisateur["prenom"];?></p>

<?php }

?>

<section id="utilisateurs">
    <?php foreach ($utilisateurs as $key => $utilisateur) {?> 
        <article class="utilisateur">
            <h2><?=$utilisateur ["nom"]." ".$utilisateur ["prenom"] ?></h2>
            <h3>Age : <?=$utilisateur ["age"] ?></h3>
        </article>
    <?php } ?>
</section>