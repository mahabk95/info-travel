<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<th>id</th>
         		<th>Nom</th>
                <th colspan="3" style="width: 30%"> Action</th>
         	</tr>
             <?php  foreach ($allRegimeHebdo as $regim_hobd) { ?>
         	<tr>
         		<td><?= $regim_hobd['id'] ?></td>
         		<td><?= $regim_hobd['label'] ?></td>
                <td><a class="btn btn-sm btn-success"  href="./index.php?article=regim-hebdomadaire&action=display&id=<?php echo $regim_hobd['id'] ?>">consulation</a></td>
                <td><a class="btn btn-sm btn-primary" href="./index.php?article=regim-hebdomadaire&action=form-update&id=<?php echo $regim_hobd['id'];?>">Modifier</a></td>
                <td><a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Remove?');" href="./index.php?article=regim-hebdomadaire&action=delete&id=<?php echo $regim_hobd['id'];?>">Supprimer</a></td>
         	</tr>
             <?php } ?>

         </table>
          <a class="btn btn-primary" href="index.php?article=regim-hebdomadaire&action=new">Nouveau regin hobdomadaire</a>
      </div>
    </main>
