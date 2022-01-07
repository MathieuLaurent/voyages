<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage Voyage</title>
</head>
<body>

    <table>
        <tr>
            <th>Ref.</th>
            <th>Nom</th>
            <th>Catégorie</th>
            <th>Description</th>
            <th>Prix</th>
            <th></th>
        </tr>
        <?php foreach($listVoyage as $voyage): ?>
        <tr>
            <td><?php echo $voyage->getRef(); ?></td>
            <td><?php echo $voyage->getNom();?></td>
            <td><?php echo $voyage->getAccroche();?></td>
            <td><?php echo number_format($voyage->getPrix(), 2, ',', ' ');?></td>
            <td><a href="detail.php?ref=<?php echo $voyage->getRef() ?>">Voir le détail</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    

</body>
</html>