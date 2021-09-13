 <main role="main" class="container">
      <div class="jumbotron">
         <form method="POST" action="./index.php?article=station&action=<? if($action == 'form-update') echo 'update'; else echo 'save'; ?>">
 
       <label for="label">label</label>
       <?php  if($station->getId() != null ){ ?>
       		<input type="hidden" name="id"  value="<?php  echo $station->getId();  ?>" />
        <?php }   ?>
       
       <input type="text" name="label"  value="<?php echo $station->getLabel();  ?>" required/><br/><br/>

       <input type="submit" name ="save" id="save" class="btn btn-success" value="Enregistrer"/>
             <a type="button" name ="retour" class="btn btn-primary" value="" href="<?= Url::generateUrl('station', 'liste');?>" >Retour</a>
</form>
      </div>
    </main>
