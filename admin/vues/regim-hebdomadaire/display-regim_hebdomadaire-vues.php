<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<td>id</td>
         		<td><?= $regim_hobd->getId(); ?></td>
         	</tr>
         	<tr>
         		<td>Nom</td>
         		<td><?= $regim_hobd->getLabel() ?></td>
         	</tr>
             <tr>
                 <td><a class="btn btn-primary" href="index.php?article=regim-hebdomadaire&action=liste">liste des regim hobdomadeur</a></td>
                 <td>&nbsp;</td>
             </tr>
         </table>
      </div>
    </main>
