<div class="container">
    <h2 class="text-orange">Ajouter un propietaire</h2>
    <form action="index.php?action=addOwner" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group col-md-6">
                <label for="prenom">Prenom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
        </div>
        <div class="form-group">
            <label for="rue">Rue :</label>
            <input type="text" class="form-control" id="rue" name="rue">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="codePostal">Code postal :</label>
                <input type="number" class="form-control col-lg-6" id="codePostal" name="codePostal">
            </div>
            <div class="form-group col-md-6">
                <label for="ville">Ville :</label>
                <input type="text" class="form-control" id="ville" name="ville">
            </div>    
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="telephone">Téléphone :</label>
                <input type="text" class="form-control" id="telephone" name="telephone">
            </div>
            <div class="form-group col-md-6">
                <label for="telephoneMobile">Téléphone mobile :</label>
                <input type="text" class="form-control" id="telephoneMobile" name="telephoneMobile">
            </div>    
        </div>
        <button type="submit" class="btn btn-primary mb-5">Sauvegarder</button>
    </form>
</div>