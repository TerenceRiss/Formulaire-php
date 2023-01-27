<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    
</head>
<body>
    <form action="contact.php" method="get" class="header_form">
        Votre nom :<input type="text" name="nom" placeholder="nom">
        Votre prenom :<input type="text" name="prenom" placeholder="prenom">
        Votre âge :<input type="text" name="age" placeholder="age">
        e-mail : <input type="text" name="email" placeholder="email">
        adresse : <input type="text" name="adresse" placeholder="adresse">
        telephone : <input type="text" name="telephone" placeholder="telephone">
        
        <input type="submit" value="Envoyer" name="btnSub">
        <input type="reset" value="Annuler" name="btnCancel">
    </form>
</body>
</html>