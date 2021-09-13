 <main role="main" class="container">
      <div class="jumbotron">
         <form method="POST" action="./index.php?article=programme-saisonaire&action=<? if($action == 'form-update') echo 'update'; else echo 'save'; ?>">
 
       <label for="label">label</label>
       <input type="hidden" name="id"  value="<?php  echo $prog_saionaire->getId();  ?>" />
       <input type="text" name="label"  value="<?php echo $prog_saionaire->getLabel();  ?>" required/><br/><br/>
             <label for="label">date debut</label>
       <input type="date" name="date_debut"  value="<?php echo substr($prog_saionaire->getDateDebut(),0, 10);  ?>" required/><br/><br/>
             <label for="label">date fin</label>
       <input type="date" name="date_fin"  value="<?php echo substr($prog_saionaire->getDateFin(),0, 10);  ?>" required/><br/><br/>

       <input type="submit" name ="save" id="save" class="btn btn-success" value="Enregistrer"/>
             <a type="button" name ="retour" class="btn btn-primary" value="" href="<?= Url::generateUrl('programme-saisonaire', 'liste');?>" >Retour</a>
</form>
      </div>
    </main>
