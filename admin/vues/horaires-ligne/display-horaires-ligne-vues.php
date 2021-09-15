<main role="main" class="container">
    <div class="jumbotron">
        <form method="POST" action="./index.php?article=horaires-ligne&action=<? if($action == 'form-update') echo 'update'; else echo 'save'; ?>">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="num_ligne">Numéro de la ligne : <b><?= $ligne->getNumero() ?></b></label>
                    <input type="hidden" value="<?= $ligne->getId()?>" name="lineId">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="regim_hebdomadeur_id">Régime hébdomadaire : </label>
                    <b><?= $regimHebdo->getLabel() ?></b>



                </div>
                <div class="col-md-3 mb-3">
                    <label for="programme_saisonaire_id">Programme saisonnière : </label> <b><?= $programmeSaison->getLabel() ?></b>

                </div>
                <div class="col-md-3 mb-3">
                    <label for="programme_saisonaire_id">Direction : </label>
                    <b><?php  echo "Allé"?></b>
                </div>
                <div class="col-md-3 mb-3" >
                    <div  style=" margin-left: 0px;" id="label-alle" >
                        <b><?= $stationDepart->getLabel() ?> --> <?= $stationArrivee->getLabel() ?></b>

                    </div>
                    <div  style="margin-top: 30px; margin-left: 0px;display: none!important;" id="label-retour">
                        <?= $stationArrivee->getLabel() ?> --> <?= $stationDepart->getLabel() ?>


                    </div>

                </div>
            </div>
            <br/>
            <div class="row">

                <div class="col-6" id="row-time" >
                <?php foreach ($horairesLigne['heure_depart'] as $k => $hd){ ?>
                    <div class="row">
                        <div class="input-group mb-2 mr-2" style="width: 30%">
                            <div class="input-group-prepend">
                                <div class="input-group-text"  style="font-size: 11px;">N°départ</div>
                            </div>
                            <input type="number" readonly value="<?= $horairesLigne['numero_depart'][$k]?>" name="num-depart[]" style="width: 50px" class="form-control"  >
                        </div>
                        <div class="input-group mb-2  mr-2" style="width: 30%">
                            <div class="input-group-prepend">
                                <div class="input-group-text"  style="font-size: 11px;">Départ</div>
                            </div>
                            <input type="time" value="<?= $hd?>" readonly name="heure-depart[]" style="width: 50px; " class="form-control"  >
                        </div>
                        <div class="input-group mb-2  mr-2" style="width: 30%">
                            <div class="input-group-prepend">
                                <div class="input-group-text"  style="font-size: 11px;">Arrivée</div>
                            </div>
                            <input type="time"  name="heure-arrivee[]" readonly  value="<?= $horairesLigne['heure_arrive'][$k]?>" style="width: 50px" class="form-control">
                        </div>

                    </div>
                    <?php } ?>

                </div>

            </div>
            <a type="button" style="float: right;" name ="retour" class="btn btn-primary" value="" href="<?= Url::generateUrl('ligne', 'liste');?>" >Retour</a>
        </form>
    </div>
</main>

