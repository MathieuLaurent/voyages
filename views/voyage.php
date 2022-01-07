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
        <?php foreach($voyages as $voyage): ?>
        <tr>
            <td><?php echo $voyages->ref; ?></td>
            <td><?php echo $voyages->nom;?></td>
            <td><?php echo $voyages->accroche;?></td>
            <td><?php echo number_format($voyages->prix, 2, ',', ' ');?></td>
            <td><a href="detail.php?ref=<?php echo $voyage->ref ?>">Voir le détail</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    

</body>
</html>