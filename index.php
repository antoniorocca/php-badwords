<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Badwords</title>
 </head>
 <body>
     <!-- Creare una variabile con un paragrafo di testo.
     Visualizzare a schermo il paragrafo con la relative lunghezza e
     sostituire la badword passata in GET con tre *. -->

     <?php $paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi quisquam sunt nulla!';
     $badword = $_GET["badword"];
     $noBadword = str_replace($badword," ***",$paragraph);?>
     <h3><?php echo $noBadword;?></h3>
     <p><?php echo 'Questo paragrafo ha ' .strlen($noBadword). ' caratteri.';?></p>   
 </body>
</html>