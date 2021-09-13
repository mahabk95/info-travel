<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<td>id</td>
         		<td><?= $ligne["id"]; ?></td>
         	</tr>
         	<tr>
         		<td>Numéro</td>
         		<td><?= $ligne["numero"] ?></td>
         	</tr>
             <tr>
                 <td>Dépot</td>
                 <td><?= $ligne["label_depot"] ?></td>
             </tr>
             <tr>
                 <td>Station départ</td>
                 <td><?= $ligne["label_sd"] ?></td>
             </tr>
             <tr>
                 <td>Station Arrivée</td>
                 <td><?= $ligne["label_sa"] ?></td>
             </tr>
             <tr>
                 <td>Régime Hébdomadaire</td>
                 <td><?= $ligne["label_rh"] ?></td>
             </tr>



             <tr>
                 <td><a class="btn btn-primary" href="index.php?article=ligne&action=liste">liste des lignes</a></td>
                 <td>&nbsp;</td>
             </tr>
         </table>
      </div>
    </main>
