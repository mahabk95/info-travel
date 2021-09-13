 <main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<th>id</th>
         		<th>Nom</th>
                <th colspan="3" style="width: 30%"> Action</th>
         	</tr>
             <?php  foreach ($allDepots as $depot) { ?>
         	<tr>
         		<td><?= $depot['id'] ?></td>
         		<td><?= $depot['label'] ?></td>
                <td><a class="btn btn-sm btn-success"  href="./index.php?article=depot&action=display&id=<?php echo $depot['id'] ?>">consulation</a></td>
                <td><a class="btn btn-sm btn-primary" href="./index.php?article=depot&action=form-update&id=<?php echo $depot['id'];?>">Modifier</a></td>
                <td><a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Remove?');" href="./index.php?article=depot&action=delete&id=<?php echo $depot['id'];?>">Supprimer</a></td>
         	</tr>
             <?php } ?>

         </table>
          <a class="btn btn-primary" href="index.php?article=depot&action=new">Nouveau depot</a>
      </div>
    </main>
