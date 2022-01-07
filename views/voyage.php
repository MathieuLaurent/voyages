<?php 

    include('variable.php');
?>

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
        <?php foreach($voyages as $ref => $voyage): ?>
        <tr>
            <td><?php echo $ref; ?></td>
            <td><?php echo $voyages[$ref]['nom'];?></td>
            <td><?php echo $category[$voyages[$ref]['category']]['nom'];?></td>
            <td><?php echo $voyages[$ref]['accroche'];?></td>
            <td><?php echo number_format($voyages[$ref]['prix'], 2, ',', ' ');?></td>
            <td><a href="detail.php?ref=<?php echo $ref ?>">Voir le détail</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    

</body>
</html>