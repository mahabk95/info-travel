<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<td>id</td>
         		<td><?= $prog_saionaire->getId(); ?></td>
         	</tr>
         	<tr>
         		<td>label</td>
         		<td><?= $prog_saionaire->getLabel() ?></td>
         	</tr>


            <tr>
                <td>date_debut</td>
                <td><?= $prog_saionaire->getDateDebut() ?></td>
            </tr>

            <tr>
                <td>date_fin</td>
                <td><?= $prog_saionaire->getDateFin() ?></td>
            </tr>
             <tr>
                 <td><a class="btn btn-primary" href="index.php?article=programme-saisonaire&action=liste">liste des programme saisonaires</a></td>
                 <td>&nbsp;</td>
             </tr>
         </table>
      </div>
    </main>
