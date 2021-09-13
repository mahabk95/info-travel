<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<th>id</th>
         		<th>label</th>
                    <th>date_debut</th>
                <th>date_fin</th>
                <th colspan="3" style="width: 30%"> Action</th>
         	</tr>
             <?php  foreach ($allprog_saisonaires as $prog_saisonaire) { ?>
         	<tr>
         		<td><?= $prog_saisonaire['id'] ?></td>
         		<td><?= $prog_saisonaire['label'] ?></td>
                <td><?= $prog_saisonaire['date_debut'] ?></td>
                <td><?= $prog_saisonaire['date_fin'] ?></td>
                <td><a class="btn btn-sm btn-success"  href="./index.php?article=programme-saisonaire&action=display&id=<?php echo $prog_saisonaire['id'] ?>">consulation</a></td>
                <td><a class="btn btn-sm btn-primary" href="./index.php?article=programme-saisonaire&action=form-update&id=<?php echo $prog_saisonaire['id'];?>">Modifier</a></td>
                <td><a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Remove?');" href="./index.php?article=programme-saisonaire&action=delete&id=<?php echo $prog_saisonaire['id'];?>">Supprimer</a></td>
         	</tr>
             <?php } ?>

         </table>
          <a class="btn btn-primary" href="index.php?article=programme-saisonaire&action=new">Nouveau programme saisonaire</a>
      </div>
    </main>
