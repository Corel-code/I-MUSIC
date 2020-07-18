<?php 
    // $user = new instrument("null", "null", 0 , "null", "null");
  ?>    






  <!-- <?php

setNom($Nom);
setPrenom($Prenom);
setPrix($Prix);
setEmail($Email);
setInstru($instru);
   	
 ?>
  <?php
    $user = new instrument("getNom()", "getPrenom()","getInstru()",getPrix(),"getEmail()");
?>

 <? php $to  = "getEmail()";
  
$subject  = "Email de confirmation" ;
  
  
$message  .= "<h2> Cher(e) "getNom()", "getPrenom()" </h2> </br>
<h3> nous avons recu votre commande de l'instrument "getInstru()" de prix getPrix()</h3>";
  
$header  = "From:customerservices@gmail.com \r\n" ;
  
  $retval  =mail  ( $to , $subject , $message , $header );
  
 if ($retval  == true ) {
  echo 
 "Message envoyé..." ;
   }
 else
 {
  echo 
 "Message non envoyé..." ;  
 }
   <!-- ?> -->
  
