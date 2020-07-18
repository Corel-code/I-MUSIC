<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="dbconnect.css">
</head>  
<body>
<?php
try{
	$connexion = new PDO('mysql:host=localhost; dbname=instrument','root','');
}
catch(Exception $e){
	die('Erreur :'.$e->getMessage());
}

$pdoconnect = $connexion->prepare('INSERT INTO instrument(Nom,Prenom,Email,Ville,Pays,Numero,instru,Prix) VALUES (:Nom, :Prenom, :Email, :Ville, :Pays, :Numero, :instru, :Prix)');
$pdoconnect->execute(array(

'Nom'=>$_POST['Nom'],
'Prenom'=>$_POST['Prenom'],
'Email'=>$_POST['Email'],
'Ville'=>$_POST['Ville'],
'Pays'=>$_POST['Pays'],
'Numero'=>$_POST['Numero'],
'instru'=>$_POST['instru'],
'Prix'=>$_POST['Prix'],


));

$affiche ='Votre formulaire a bien été enregistré.Vous recevrez un email de confirmation...</br>
Veuillez retourner a la page precedente pour rentrer vos informations bancaires.';
echo $affiche;


?>


<?php
   class instrument{
      /* Member variables */
      var $Nom;
      var $Prenom;
      var $Email;
      var $instru;
      var $Prix;
      function __construct( $Nom1, $Prenom1, $instru1, $Prix1, $Email1 ){
      	$this->Nom = $Nom1;
      	$this->Prenom = $Prenom1;
      	$this->instru = $instru1;
      	$this->Prix = $Prix1;
      	$this->Email = $Email1;
      }
    /* setters */
      function setNom($Nom1){
         $this->Nom = $Nom1;
      }

       function setPrenom($Prenom1){
         $this->Prenom = $Prenom1;
      }

       function setInstru($instru1){
         $this->instru = $instru1;
      }
       function setPrix($Prix1){
         $this->Prix = $Prix1;
      } 

      function setEmail($Email1){
         $this->Email = $Email1;
      }

       /*Getter*/
     
      function getNom(){
         echo $this->Nom ." <br/>";
      } 

      function getPrenom(){
         echo $this->Prenom ." <br/>";
      } 

      function getInstru(){
         echo $this->instru ." <br/>";
      }

       function getPrix(){
         echo $this->Prix ." <br/>";
      } 

      function getEmail(){
         echo $this->Email ." <br/>";
      }
   }
?>
</body>
</html>