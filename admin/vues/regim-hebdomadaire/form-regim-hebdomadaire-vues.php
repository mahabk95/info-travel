 <main role="main" class="container">
      <div class="jumbotron">
         <form method="POST" action="./index.php?article=regim-hebdomadaire&action=<? if($action == 'form-update') echo 'update'; else echo 'save'; ?>">
 
       <label for="label">label</label>
       <input type="hidden" name="id"  value="<?php  echo $regimeHebdo->getId();  ?>" />
       <input type="text" name="label"  value="<?php echo $regimeHebdo->getLabel();  ?>" required/><br/><br/>

       <input type="submit" name ="save" id="save" class="btn btn-success" value="Enregistrer"/>
             <a type="button" name ="retour" class="btn btn-primary" value="" href="<?= Url::generateUrl('regin_hobd', 'liste');?>" >Retour</a>
</form>
      </div>
    </main>
