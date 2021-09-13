<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<th>id</th>
         		<th>Nom</th>
                <th colspan="3" style="width: 30%"> Action</th>
         	</tr>
             <?php  foreach ($allstations as $station) { ?>
         	<tr>
         		<td><?= $station['id'] ?></td>
         		<td><?= $station['label'] ?></td>
                <td><a class="btn btn-sm btn-success"  href="./index.php?article=station&action=display&id=<?php echo $station['id'] ?>">consulation</a></td>
                <td><a class="btn btn-sm btn-primary" href="./index.php?article=station&action=form-update&id=<?php echo $station['id'];?>">Modifier</a></td>
                <td><a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Remove?');" href="./index.php?article=station&action=delete&id=<?php echo $station['id'];?>">Supprimer</a></td>
         	</tr>
             <?php } ?>

         </table>
          <a class="btn btn-primary" href="index.php?article=station&action=new">Nouveau station</a>
      </div>
    </main>
