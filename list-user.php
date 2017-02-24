
<?php
	require 'db.php';

 		$sqltran = mysqli_query($con, "SELECT * FROM brasse")or die(mysqli_error($con));
		$arrVal = array();

		$i=1;
 		while ($rowList = mysqli_fetch_array($sqltran)) {

						$name = array(
							'num' => $i,
							'idBrassin'=> $rowList['idBrassin'],
							'Nom'=> $rowList['Nom'],
							'Famille'=> $rowList['Famille'],
							'Style'=> $rowList['Style'],
							'Date de fabrication'=> $rowList['Date de fabrication'],
							'Age (jours)'=> $rowList['Age (jours)'],
							'ABV'=> $rowList['ABV'],
							'IBU'=> $rowList['IBU'],
							'Levures'=> $rowList['Levures'],
							'Houblons'=> $rowList['Houblons'],
							'SRM'=> $rowList['SRM'],
							'Efficacite'=> $rowList['Efficacite'],
							'Quantite levure'=> $rowList['Quantite levure'],
							'Pitch rate'=> $rowList['Pitch rate'],
							'Age levure'=> $rowList['Age levure'],
							'Yeast starter'=> $rowList['Yeast starter'],
							'T° pitch'=> $rowList['T° pitch'],
							'T° fermentation'=> $rowList['T° fermentation'],
							'OG'=> $rowList['OG'],
							'FG'=> $rowList['FG'],
							'Volume initial'=> $rowList['Volume initial'],
							'Volume embouteillé'=> $rowList['Volume embouteillé'],
							'Date du transfert'=> $rowList['Date du transfert'],
							'Durée fermentation primaire'=> $rowList['Durée fermentation primaire'],
							'Date embouteillage'=> $rowList['Date embouteillage'],
							'durée fermentation secondaire'=> $rowList['durée fermentation secondaire'],
							'Commentaires fermentation'=> $rowList['Commentaires fermentation'],
							'Cold crash'=> $rowList['Cold crash'],
							'Eau utilisée'=> $rowList['Eau utilisée'],
							'Addtifs eau'=> $rowList['Addtifs eau'],
							'T° chaudron'=> $rowList['T° chaudron'],
							'T° grains'=> $rowList['T° grains'],
							'Quantité grain'=> $rowList['Quantité grain'],
							'T° empêtage début'=> $rowList['T° empêtage début'],
							'T° empâtage fin'=> $rowList['T° empâtage fin'],
							'pH 10 mins'=> $rowList['pH 10 mins'],
							'pH 60 mins'=> $rowList['pH 60 mins'],
							'Quantité d\'eau empatage'=> $rowList['Quantité d\'eau empatage'],
							'Ratio eau/grains'=> $rowList['Ratio eau/grains'],
							'Quantité d\'eau Mash out'=> $rowList['Quantité d\'eau Mash out'],
							'T° mash out'=> $rowList['T° mash out'],
							'Commentaires empâtage'=> $rowList['Commentaires empâtage'],
							'Quantité recirculée'=> $rowList['Quantité recirculée'],
							'Quantité d\'eau sparge'=> $rowList['Quantité d\'eau sparge'],
							'Température sparge'=> $rowList['Température sparge'],
							'Commentaires sparge'=> $rowList['Commentaires sparge'],
							'Volume pre-boil'=> $rowList['Volume pre-boil'],
							'OG pre-boil'=> $rowList['OG pre-boil'],
							'Position du couvercle'=> $rowList['Position du couvercle'],
							'Volume final'=> $rowList['Volume final'],
							'Quantité d\'eau évaporée'=> $rowList['Quantité d\'eau évaporée'],
							'Commentaire boil'=> $rowList['Commentaire boil'],
							'Commentaires généraux'=> $rowList['Commentaires généraux'],
							'Personnes présentes'=> $rowList['Personnes présentes'],
							'Heure début'=> $rowList['Heure début'],
							'Heure fin'=> $rowList['Heure fin'],
							'Temps'=> $rowList['Temps'],



						);


							array_push($arrVal, $name);
			$i++;
	 	}

	 		 echo  json_encode($arrVal);


	 	mysqli_close($con);
?>
