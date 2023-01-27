
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire</title>
<link rel="stylesheet" href="form.css">
</head>
<body>

<?php 
// la fonction isset verifie si la vairable est defini

    
    $name = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $age = $_GET['age'];
    $email = $_GET['email'];
    $adresse = $_GET['adresse'];
    $telephone = $_GET['telephone'];
    if(empty ($_GET['nom']) || empty($_GET['prenom']) || empty($_GET['age']) || empty ($_GET['email']) || empty($_GET['adresse']) || empty($_GET['telephone']))
    {
        echo 'champs vide';
    } else {
        echo  "<table>
    
    <tr>
    <th>nom</th>
    <td>$name</td>
    </tr>
    
    <tr>
    <th>prenom</th>
    <td>$prenom</td>
    </tr>
    
    <tr>
    <th>age</th>
    <td>$age</td>
    </tr>
    
    <tr>
    <th>email</th>
    <td>$email</td>
    </tr>
    
    <tr>
    <th>adresse</th>
    <td>$adresse</td>
    </tr>
    
    </table>";
}
;
?>     
</body>
</html>

