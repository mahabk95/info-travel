<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<td>id</td>
         		<td><?= $station->getId(); ?></td>
         	</tr>
         	<tr>
         		<td>Nom</td>
         		<td><?= $station->getLabel() ?></td>
         	</tr>
             <tr>
                 <td><a class="btn btn-primary" href="index.php?article=station&action=liste">liste des depots</a></td>
                 <td>&nbsp;</td>
             </tr>
         </table>
      </div>
    </main>
