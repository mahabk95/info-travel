 <main role="main" class="container">
      <div class="jumbotron">
          <form method="POST" action="./index.php?article=horaires-ligne&action=<? if($action == 'form-update') echo 'update'; else echo 'save'; ?>">
          <div class="row">
              <div class="col-md-12 mb-3">
                  <label for="num_ligne">Numéro de la ligne : <b><?= $ligne->getNumero() ?></b></label>
                  <input type="hidden" value="<?= $ligne->getId()?>" name="lineId">
              </div>
              <div class="col-md-3 mb-3">
              <label for="regim_hebdomadeur_id">Régime hébdomadaire</label>
              <select  class="form-control" name="regim_hebdomadeur_id"  required >
                  <option value="0">choisir Régime hébdomadaire</option>
                  <option value="1">5 sur 7</option>
                  <option value="2">6 sur 7</option>
                  <option value="3">7 sur 7</option>

              </select>
              <div class="invalid-feedback">
                  Valid last name is required.
              </div>
              </div>
              <div class="col-md-3 mb-3">
                  <label for="programme_saisonaire_id">Programme saisonnière</label>
                  <select  class="form-control" name="programme_saisonaire_id"  required >
                    <option value="0">choisir le Programme </option>
                    <option value="4">Hiver</option>
                    <option value="4">ETE</option>
                    <option value="4">ROMDHANE</option>

                  </select>
                  <div class="invalid-feedback">
                      Valid last name is required.
                  </div>
              </div>
              <div class="col-md-3 mb-3">
                  <label for="programme_saisonaire_id">Direction</label>
                  <select  class="form-control" name="direction_id"  id="direction" required >
                      <option value="0">choisir la direction</option>
                      <option value="1">Aller</option>
                      <option value="2">Retour</option>


                  </select>
                  <div class="invalid-feedback">
                      Valid last name is required.
                  </div>
              </div>
              <div class="col-md-3 mb-3" >
                <div  style="margin-top: 30px; margin-left: 0px;display: none!important;" id="label-alle" >
                    <?= $stationDepart->getLabel() ?> --> <?= $stationArrivee->getLabel() ?>

                </div>
                  <div  style="margin-top: 30px; margin-left: 0px;display: none!important;" id="label-retour">
                      <?= $stationArrivee->getLabel() ?> --> <?= $stationDepart->getLabel() ?>


                  </div>

              </div>
          </div>
            <br/>
          <div class="row">

              <div class="col-6" id="row-time" >


              </div>
              <div class="col-md-12 mb-3" style="padding-left: 0px">

                  <button id= "addLine"  type="button" class="btn btn-primary" style="margin-top: 30px; margin-left: 0px"> <b  style="font-weight: bolder!important; font-size: 15px">+</b> Ajouter départ</button>

              </div>
          </div>
              <input type="submit" style="float: right;" name ="save" id="save" class="btn btn-success ml-1" value="Enregistrer"/>
              <a type="button" style="float: right;" name ="retour" class="btn btn-primary" value="" href="<?= Url::generateUrl('hor_ligne', 'liste');?>" >Retour</a>
</form>
      </div>
    </main>
 <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
 <script>
     $(document).ready(function(){
        let row = `
        <div class="row">
                      <div class="input-group mb-2 mr-2" style="width: 30%">
                          <div class="input-group-prepend">
                              <div class="input-group-text"  style="font-size: 11px;">N°départ</div>
                          </div>
                          <input type="number" name="num-depart[]" style="width: 50px" class="form-control" id="inlineFormInputGroupUsername2" placeholder="N°départ">
                      </div>
                      <div class="input-group mb-2  mr-2" style="width: 30%">
                          <div class="input-group-prepend">
                              <div class="input-group-text"  style="font-size: 11px;">Départ</div>
                          </div>
                          <input type="time" name="heure-depart[]" style="width: 50px" class="form-control" id="inlineFormInputGroupUsername2" placeholder="N°départ">
                      </div>
                      <div class="input-group mb-2  mr-2" style="width: 30%">
                          <div class="input-group-prepend">
                              <div class="input-group-text"  style="font-size: 11px;">Arrivée</div>
                          </div>
                          <input type="time"  name="heure-arrivee[]" style="width: 50px" class="form-control" id="inlineFormInputGroupUsername2" placeholder="N°départ">
                      </div>

                  </div>
        `;
         $("#addLine").click(function(){
             $( "#row-time" ).append( row );
         });
         $("#direction").change(function () {
             let valueDirection = $(this).val();
             if(valueDirection == 1){

                 $("#label-alle").show();
                 $("#label-retour").hide();
             }
             if(valueDirection == 2){
                 $("#label-alle").hide();
                 $("#label-retour").show();
             }
             if(valueDirection == 0){
                 $("#label-alle").hide();
                 $("#label-retour").hide();
             }

         });
     })


 </script>
