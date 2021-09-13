 <main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<td>id</td>
         		<td><?= $depot->getId(); ?></td>
         	</tr>
         	<tr>
         		<td>Nom</td>
         		<td><?= $depot->getLabel() ?></td>
         	</tr>
             <tr>
                 <td><a class="btn btn-primary" href="index.php?article=depot&action=liste">liste des depots</a></td>
                 <td>&nbsp;</td>
             </tr>
         </table>
      </div>
    </main>
