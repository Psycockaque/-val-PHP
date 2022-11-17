<?php
if (isset($_GET['id'])) {
    $delete = $bdd->prepare('DELETE FROM livre WHERE id  = ?') ;
    $delete->execute(array($_GET['id']));
}
$membre = $bdd->querry('SELECT *FROM users') ;
$nbr= $membre -> RowCount();

if($nbr== 0)
?> 