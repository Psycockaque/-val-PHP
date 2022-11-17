<?php
include "connect.php";

$sth = $conn->prepare("SELECT * FROM livre");
$sth->execute();

/* Récupération de toutes les lignes d'un jeu de résultats */
print("Récupération de toutes les lignes d'un jeu de résultats :\n");
$result = $sth->fetchAll();
//echo '<pre>';print_r($result);echo '</pre>';



?>

<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>date</th>
        <th>résumé</th>
        <th>id_auteur</th>
    </thead>
    <tbody>
        <?php
        foreach($result as $produit){
            ?>
            <tr>
                <td><?= $produit['ID'] ?></td>
                <td><?= $produit['nom'] ?></td>
                <td><?= $produit['date'] ?></td>
                <td><?= $produit['résumé'] ?></td>
                <td><?= $produit['id_auteur'] ?></td>
                <td><a href="create.php?id=<?= $produit['id'] ?>">créée</a>  <a href="update.php?id=<?= $produit['id'] ?>">Modifier</a>  <a href="delete.php?id=<?= $produit['id'] ?>">Supprimer</a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
