
    
<form action="" method="post">
    <!--civilité-->
    <div class="input-group my-3">
        <label class="input-group-text" for="civ">Civilité</label>
        <select class="form-select rounded" id="civ" name="civ">
            <option >Indiquez votre Civilité</option>
            <option value="mr" <?=(isset($civ) && $civ == 'mr') ? 'selected': ''?>>Mr</option>
            <option value="mme" <?=(isset($civ) && $civ == 'mme') ? 'selected': ''?>>Mme</option>
        </select>
        <div id="civ_error" class="form-text text-danger ml-3"><?= $errorsArray['civ_error'] ?? ''?></div>

    </div>

    <!-- Nom et Prénom -->
        <div class="input-group mb-3">
            <span class="input-group-text">Nom et Prénom</span>            
            <input type="text" name="name" id="name" aria-label="Name" class="form-control" placeholder="Nom" value="<?= $name ?? ''?>" pattern="[A-Za-z éèêëàâäôöûüç\'-]{2,20}" required>
            <input type="text" name="firstname" id="firstname" aria-label="First name" class="form-control" placeholder="Prénom" value="<?= $firstname ?? ''?>" pattern="[\w]{2,20}" required>
        </div>
        <div class="input-group mb-3">
            <div id="name_error" class="form-text text-danger"><?= $errorsArray['name_error'] ?? ''?></div>
            <div id="firstname_error" class="form-text text-danger ml-4"><?= $errorsArray['firstname_error'] ?? ''?></div>
        </div>

    <!-- Age -->
        <div class="input-group mb-3">
            <span for="age" class="input-group-text"> Age : </span>
            <input type="number" class="form-control" name="age" id="age" min="18" max="120" step="1" value="<?= $age ?? ''?>" pattern="^[\d]+$" required> 
        </div>
            <div id="age_error" class="form-text text-danger ml-3"><?= $errorsArray['age_error'] ?? ''?></div>

    <!-- Organisation -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Organisation :</span>
            <input type="text" class="form-control" name="organisation" id="organisation" placeholder="Jo'n'Co" aria-label="Jo'n'Co" aria-describedby="basic-addon1" value="<?= $organisation ?? '' ?>" pattern="[\w\d]{2,60}" required>
            <div id="organisation_error" class="form-text text-danger ml-3"><?= $errorsArray['organisation_error'] ?? ''?></div>

        </div>

        <button type="submit" class="btn btn-outline-dark">Envoyer</button>
</form>
    
