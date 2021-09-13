<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>Numero</th>
                <th>Depot</th>
                <th>Depart</th>
                <th>Arrivée</th>
                <th>Etat</th>
                <th colspan="4" style="width: 30%"> Action</th>
            </tr>
             <?php  foreach ($alllignes as $ligne) { ?>
            <tr>
                <td><?= $ligne['id'] ?></td>
                <td><?= $ligne['numero'] ?></td>
                <td><?= $ligne['label_depot'] ?></td>
                <td><?= $ligne['label_sd'] ?></td>
                <td><?= $ligne['label_sa'] ?></td>
                <td><? if( $ligne['status'] == 1) echo "<b style='color: green;'>en exploitation</b>"; else  echo "<b style='color: orange;'>Non exploité</b>" ?></td>
                <td><a class="btn btn-sm btn-success"  href="./index.php?article=ligne&action=display&id=<?php echo $ligne['id'] ?>">consulation</a></td>
                <td><a class="btn btn-sm btn-primary" href="./index.php?article=ligne&action=form-update&id=<?php echo $ligne['id'];?>">Modifier</a></td>
                <td><a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Remove?');" href="./index.php?article=ligne&action=delete&id=<?php echo $ligne['id'];?>">Supprimer</a></td>
                <td><a class="btn btn-sm btn-primary"  href="./index.php?article=horaires-ligne&action=new&id=<?php echo $ligne['id'];?>">Gestion des Horaires</a></td>
            </tr>
             <?php } ?>

         </table>
          <a class="btn btn-primary" href="index.php?article=ligne&action=new">Nouveau ligne</a>
      </div>
    </main>