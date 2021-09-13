 <main role="main" class="container">
      <div class="jumbotron">


<form method="POST" action="./index.php?article=ligne&action=<? if($action == 'form-update') echo 'update'; else echo 'save'; ?>">
 
       <label for="number">number</label>
       <input type="hidden" name="id"  value="<?php  echo $ligne->getId();  ?>" />
       <input type="text" name="numero"  value="<?= $ligne->getNumero(); ?>" required/><br/><br/>

       <label for="number">Status</label>
       <input type="radio" name="status" value="0" <?php if($ligne->getStatus() == 0){ echo "checked=checked";} ?>  style="margin-right: 7px; margin-left: 7px" required/> Inactive
       <input type="radio" name="status" value="1" <?php if($ligne->getStatus() == 1){ echo "checked=checked";} ?>  required  style="margin-right: 7px; margin-left: 7px" />Active<br/><br/>

       <label for="station_depart_id">Station départ</label>

       <select name="station_depart_id"   required/>
    <option value=0 >Veuillez choisir la Station</option>
       <?php foreach ($allstations as $key => $station) { ?>
       	<?php if($action == 'form-update'){ ?>
       		<option value="<?= $station['id'];?>"    <?php if($station['id'] == $ligne->getStationDepartId()){ echo "selected = selected";} ?> ><?= $station['label']; ?></option>
       	<?php }else{ ?>
       <option value=<?= $station['id']; ?> ><?= $station['label']; ?></option>
      <?php  }
       }?>
       	
       </select> <br/><br/>
       <label for="station_arrivee_id">Station Arrivée</label>
       <select name="station_arrivee_id"   required/>
       <option value=0 >Veuillez choisir la Station</option>
       <?php foreach ($stations as $key => $s) { ?>
        <?php if($action == 'form-update'){ ?>
            <option value=<?= $s['id'];?>    <?php  if($s['id'] == $ligne->getStationArriveeId()){ echo "selected = selected";} ?> ><?= $s['label']; ?></option>


        <?php }else{ ?>
       <option value=<?= $s['id']; ?> ><?= $s['label']; ?></option>
      <?php  } } ?>
       </select>
       <br/><br/>	
       <label for="depot_id">Dépot</label>
       <select name="depot_id"   required/>
       <option value=0 >Veuillez choisir Depot</option>
       <?php foreach ($depots as $key => $s) { ?>
    <?php if($action == 'form-update'){ ?>
        <option value=<?= $s['id']; ; ?>  <?php  if($s['id'] == $ligne->getDepotId()){ echo "selected = selected";} ?> ><?= $s['label']; ?></option>


    <?php }else{ ?>
       <option value=<?= $s['id']; ?> ><?= $s['label']; ?></option>
      <?php  } }?>
       </select>
       <br/><br/>
       <label for="regime_hebdomadeur_id">Regime hebdomadaire</label>
       <select name="regin_hebdomadeur_id"   required/>
       <option value=0 >Veuillez choisir le regime</option>
       <?php foreach ($regimes as $key => $s) { ?>
    <?php if($action == 'form-update'){ ?>
        <option value=<?= $s['id']; ?>  <?php if($s['id'] == $ligne->getReginHebdomadeurId()){ echo "selected = selected";} ?> ><?= $s['label']; ?></option>


    <?php }else{ ?>
       <option value=<?= $s['id']; ?> ><?= $s['label']; ?></option>
      <?php  }} ?>
       </select>
       <br/><br/>	



    <input type="submit" name ="save" id="save" class="btn btn-success" value="Enregistrer"/>
    <a type="button" name ="retour" class="btn btn-primary" value="" href="<?= Url::generateUrl('ligne', 'liste');?>" >Retour</a>
</form>
      </div>
    </main>
