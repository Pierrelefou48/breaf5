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
    

 <?php 
 {
    $connexion = new PDO('mysql:host=localhost;
    dbname=basebreaf5;
    charset=utf8', 
    'root', 
    '');


   
}
if (!isset($connexion)){
    echo "connexion non établie";
}
else {
    echo("connexion établie !");
}

    ?>	
</body>
</html>


