 <main role="main" class="container">
      <div class="jumbotron">
         <form method="POST" action="./index.php?article=user&action=<? if($action == 'form-update') echo 'update'; else echo 'save'; ?>">
 
       <label for="label">label</label>
       <input type="hidden" name="id"  value="<?php  echo $user->getId();  ?>" />
       <input type="text" name="nom"  value="<?php echo $user->getLabel();  ?>" required/><br/><br/>
       <input type="text" name="prenom"  value="<?php echo $user->getLabel();  ?>" required/><br/><br/>
       <input type="text" name="email"  value="<?php echo $user->getLabel();  ?>" required/><br/><br/>
       <input type="text" name="ligin"  value="<?php echo $user->getLabel();  ?>" required/><br/><br/>
       <input type="text" name="etat"  value="<?php echo $user->getLabel();  ?>" required/><br/><br/>
       <input type="text" name="pwd"  value="<?php echo $user->getLabel();  ?>" required/><br/><br/>
       <input type="text" name="cin"  value="<?php echo $user->getLabel();  ?>" required/><br/><br/>
       <input type="text" name="telephone"  value="<?php echo $user->getLabel();  ?>" required/><br/><br/>



       <input type="submit" name ="save" id="save" class="btn btn-success" value="Enregistrer"/>
             <a type="button" name ="retour" class="btn btn-primary" value="" href="<?= Url::generateUrl('user', 'liste');?>" >Retour</a>
</form>
      </div>
    </main>
