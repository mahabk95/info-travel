<?php


class Message {

    static private $success = NULL;
    static private $error = NULL;
    
    
    private function __construct() {    
       
    }



    
  
    static public function getMessage($url, $text, $typeOfMessage='success'){
       
       $message = "<div class = '".$typeOfMessage." position ' >".$text." </div>";
       if($typeOfMessage !='success'){

           $message = "<div class = '".$typeOfMessage." position ' >".$text." </div>";
       }
        echo $message;

?>
<style>
body{
    font-family:Arial, Helvetica, sans-serif; 
    font-size:13px;
}
.info, .success, .warning, .error, .validation {
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
}
.info {
    color: #00529B;
    background-color: #BDE5F8;
    background-image: url('info.png');
}
.success {
    color: #4F8A10;
    background-color: #DFF2BF;
    background-image:url('./web/img/success.png');
}
.warning {
    color: #9F6000;
    background-color: #FEEFB3;
    background-image: url('./web/img/warning.png');
}
.error {
    color: #D8000C;
    background-color: #FFBABA;
    background-image: url('error.png');
}
.position{
    margin-top:70px; width:70%; margin-left:auto;margin-right:auto
}
    </style>

<script language="javascript" type="text/javascript">

url ="<?php echo $url; ?>" 
function redirectionUrl(url){
    window.location = url
 }
     window.setTimeout(function(){
        redirectionUrl(url)
     } ,3000);
</script>

<?php 


    }  
}
 

 ?>