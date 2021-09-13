<?php
      	ob_start();
        require "./config/parametre.php";
    		require "./tools/spdo.php";
	    	require "./model/depot/depot-model.php";
        require "./model/station/station-model.php";
        require "./model/regim-hebdomadaire/regim-hebdomadaire-model.php";
        require "./model/programme-saisonaire/programme-saisonaire-model.php";
        require "./model/ligne/ligne-model.php";
        require "./model/horaires-ligne/horaires-ligne-model.php";

      	require  "./tools/Url.php";
	    	require  "./tools/Message.php";

      		$article = $_GET['article'];
      		$action = $_GET['action'];
      	
        	//echo "controller/".$article."/".$action."-".$article.".php";
      		include "controller/".$article."/".$action."-".$article.".php";
        	$content_page = ob_get_clean();
      		include "./layout.php"


      	?>
        
   