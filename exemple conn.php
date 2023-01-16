<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' type ='text/css' href='css/style.css'>

	<title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>Nom</th>
        <th>Lien</th>
        <th>Description</th>
    </tr>

	<?php //On se connecte à MySQL

	//include("include/connexion.php");
    

        $sql =  'SELECT * FROM lien';

        $lienStatement = $pdo->prepare($sql);
        $lienStatement->execute();
        $datas = $lienStatement->fetchAll();

        foreach($datas as $ligne){
            echo"<tr>";
            echo"<td>" .$ligne['nom_site']."</td>";
            echo"<td>" .$ligne['lien_url']."</td>";
            echo"<td>" .$ligne['lien_Description']."</td>";
        }
	


    ?>	
</body>
</html>


