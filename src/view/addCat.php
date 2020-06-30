<div class="container">
    <h2 class="text-orange">Ajouter un chat</h2>
    <form action="index.php?action=addCat" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">            
            </div>
            <div class="form-group col-md-6">
                <label for="idRace">Race</label>
                <select id="idRace" class="form-control" name="idRace">
                    <option value="">- Sélectionnez une race -</option>
                    <?php foreach($racesChats as $race) { ?>
                        <option value="<?=intval($race->getId())?>"><?= htmlspecialchars($race->getNom())?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="dateNaissance">Date de naissance</label>
                <input type="date" class="form-control" id="dateNaissance" name="dateNaissance">
            </div>
            <div class="form-group col-md-6">
                <label for="dateDeces">Date de deces</label>
                <input type="date" class="form-control" id="dateDeces" name="dateDeces">
            </div>
        </div>
        <div class="form-group">
            <label for="idPropietaire">Propietaire</label>
            <select id="idPropietaire" class="form-control" name="idPropietaire">
                <option value="">- Sélectionnez un propietaire -</option>
                <?php foreach($propietaires as $propietaire) { ?>
                    <option value="<?=intval($propietaire->getId())?>"><?= htmlspecialchars($propietaire->getNom())." ".htmlspecialchars($propietaire->getPrenom())?></option>
                <?php } ?>
            </select>            
        </div>
        <div class="form-group">
            <label for="photo">Photo :</label>
            <input type="file" class="form-control-file" id="photo" name="photo">
        </div>
        <button type="submit" class="btn btn-primary mb-5">Sauvegarder</button>
    </form>
</div>