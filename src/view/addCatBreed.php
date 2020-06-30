<div class="container col d-lg-flex">
    <div class="col-lg-8">
        <h2 class="text-orange">Ajouter une race de chat</h2>
        <form action="index.php?action=addCatBreed" method="POST">
            <div class="form-group">
                <label for="nom">Nom de la race: </label>
                <input type="text" class="form-control" id="nom" aria-describedby="nom" name="nom">
            </div>
            <button type="submit" class="btn btn-primary mb-5">Sauvegarder</button>
        </form>
    </div>
    <div class="col-lg-4">
        <h2 class="text-orange">Races de chats créés</h2>
        <ul>
            <?php foreach ($racesChats as $race) { ?>
                <li><?= htmlspecialchars($race->getNom()) ?></li>
            <?php } ?>
        </ul>                        
    </div>
</div>