<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<th>id</th>
         		<th>Nom</th>
                <th colspan="3" style="width: 30%"> Action</th>
         	</tr>
             <?php  foreach ($allhor_lignes as $hor_ligne) { ?>
         	<tr>
         		<td><?= $hor_ligne['id'] ?></td>
         		<td><?= $hor_ligne['label'] ?></td>
                <td><a class="btn btn-sm btn-success"  href="./index.php?article=horaires-ligne&action=horaires-ligne&id=<?php echo $hor_ligne['id'] ?>">consulation</a></td>
                <td><a class="btn btn-sm btn-primary" href="./index.php?article=horaires-ligne&action=form-update&id=<?php echo $hor_ligne['id'];?>">Modifier</a></td>
                <td><a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Remove?');" href="./index.php?article=horaires-ligne &action=delete&id=<?php echo $hor_ligne['id'];?>">Supprimer</a></td>
         	</tr>
             <?php } ?>

         </table>
          <a class="btn btn-primary" href="index.php?article=horaires-ligne&action=new">Nouveau horaires ligne</a>
      </div>
    </main>depot
