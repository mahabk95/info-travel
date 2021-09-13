<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<td>id</td>
         		<td><?= $hor_ligne->getId(); ?></td>
         	</tr>
         	<tr>
         		<td>derection</td>
         		<td><?= $hor_ligne->getLabel() ?></td>
         	</tr>

            <tr>
                <td>heure_depart</td>
                <td><?= $hor_ligne->getLabel() ?></td>
            </tr>

            <tr>
                <td>heure_arrive</td>
                <td><?= $hor_ligne->getLabel() ?></td>
            </tr>
            <tr>
                <td>numero_depot</td>
                <td><?= $hor_ligne->getLabel() ?></td>
            </tr>


             <tr>
                 <td><a class="btn btn-primary" href="index.php?article=horaires-ligne&action=liste">liste des horaires lignes</a></td>
                 <td>&nbsp;</td>
             </tr>
         </table>
      </div>
    </main>
