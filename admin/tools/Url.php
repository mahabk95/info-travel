
<?php
 
Class Url{
	

	public static function generateUrl($article, $action, $param = array()){
	    if(count($param) == 0)
	         return "./index.php?article=".$article."&action=".$action;
	    else
	        return;

    }
}