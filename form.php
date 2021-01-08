<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>
    
    <form action="" method="post">
    <!--civilité-->
        <div>
            Civilité: 
            <select name="civ" id="civ">
                <option value=""></option>
                <option value="mr">Monsieur</option>
                <option value="mme">Madame</option>
            </select>
        </div>

    <!-- nom -->  
        <div>
            Nom :
            <input type="text" name="lastname" id="lastname" value="<?= $lastname ?? ''?>" required>        
        </div>
    
    <!--Prenom-->
        <div>
            Prénom : 
            <input type="text" name="name" id="name" value="<?= $name ?? ''?>" required>        
        </div>
    
    <!-- Age -->
        <div>
            Age : 
            <input type="number" name="age" id="age" min="18" max="120" value="<?= $age ?? ''?>" required>        
        </div>

    <!-- Organisation -->
        <div>
            Société :
            <input type="text" name="organisation" id="organisation" value="<?= $organisation ?? ''?>" required>        
        </div>

    <button type="submit">Envoyer</button>
    </form>
</body>
</html>