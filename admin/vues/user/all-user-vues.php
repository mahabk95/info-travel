<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<th>id</th>
         		<th>Nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>ligin</th>
                <th>etat</th>
                <th>pwd</th>
                <th>cin</th>
                <th>telephone</th>
                <th colspan="3" style="width: 30%"> Action</th>
         	</tr>
             <?php  foreach ($allusers as $user) { ?>
         	<tr>
         		<td><?= $user['id'] ?></td>
         		<td><?= $user['label'] ?></td>
                <td><a class="btn btn-sm btn-success"  href="./index.php?article=user&action=display&id=<?php echo $user['id'] ?>">consulation</a></td>
                <td><a class="btn btn-sm btn-primary" href="./index.php?article=user&action=form-update&id=<?php echo $user['id'];?>">Modifier</a></td>
                <td><a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Remove?');" href="./index.php?article=user&action=delete&id=<?php echo $user['id'];?>">Supprimer</a></td>
         	</tr>
             <?php } ?>

         </table>
          <a class="btn btn-primary" href="index.php?article=user&action=new">Nouveau user</a>
      </div>
    </main>
