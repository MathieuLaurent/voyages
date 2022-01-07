<?php 

    include('variable.php');

    $ref = $_GET['ref'];

    function prix2Pers($prix){
        $prix2 = $prix * 2;
        return $prix2;
    }
    function prix4Pers($prix){
        $prix4 = $prix * 4;
        return $prix4;
    }

?>

<body>
    <?php if(!empty($ref)):?>
        <table>
            <tr>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Accroche</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Prix pour 2</th>
                <th>Prix pour 4</th>
                <th></th>
            </tr>
            <tr>
                <td><?php echo $voyages[$ref]['nom'] ?></td>
                <td><?php echo $voyages[$ref]['category'] ?></td>
                <td><?php echo $voyages[$ref]['accroche'] ?></td>
                <td><?php echo $category[$voyages[$ref]['category']]['description'] ?></td>
                <td><?php echo number_format($voyages[$ref]['prix'], 2, ',', ' ')?>€</td>
                <td><?php echo number_format(prix2Pers($voyages[$ref]['prix']), 2, ',', ' ')?>€</td>
                <td><?php echo number_format(prix4Pers($voyages[$ref]['prix']), 2, ',', ' ')?>€</td>
                <td><a href="voyage.php">Retour</a></td>
            </tr>
        </table>
    <?php endif ?>
</body>