<main role="main" class="container">
      <div class="jumbotron">
         <table class="table table-striped">
         	<tr>
         		<td>id</td>
         		<td><?= $user->getId(); ?></td>
         	</tr>
         	<tr>
         		<td>Nom</td>
         		<td><?= $user->getLabel() ?></td>
         	</tr>

            <tr>
                <td>prenom</td>
                <td><?= $user->getLabel() ?></td>
            </tr>

            <tr>
                <td>email</td>
                <td><?= $user->getLabel() ?></td>
            </tr>

            <tr>
                <td>ligin</td>
                <td><?= $user->getLabel() ?></td>
            </tr>

            <tr>
                <td>etat</td>
                <td><?= $user->getLabel() ?></td>
            </tr>
            <tr>
                <td>pwd</td>
                <td><?= $user->getLabel() ?></td>
            </tr>

            <tr>
                <td>cin</td>
                <td><?= $user->getLabel() ?></td>
            </tr>
            <tr>
                <td>telephone</td>
                <td><?= $user->getLabel() ?></td>
            </tr>
             <tr>
                 <td><a class="btn btn-primary" href="index.php?article=user&action=liste">liste des depots</a></td>
                 <td>&nbsp;</td>
             </tr>
         </table>
      </div>
    </main>
