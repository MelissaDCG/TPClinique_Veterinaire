<div class="container">  
    <h2 class="text-center my-4 text-orange">Nos patients canins</h2>
    <div class="row row-cols-1 row-cols-md-2">
    <?php foreach($dogs as $dog) {?>
    <div class="card mb-3 mr-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="public/images/patients/<?=htmlspecialchars($dog->getPhoto())?>" class="card-img h-100" alt="photo patient">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title"><?=htmlspecialchars($dog->getNom())?></h5>
                    <?php  $manager = new DogBreedsManager;
                            $race = $manager->getRaceChien(intval($dog->getIdRace()));
                    ?>
                    <p class="card-text">Race : <?= $race->getNom()?>
                    <p class="card-text">Date de naissance : <?=date('d/m/Y',strtotime(htmlspecialchars($dog->getDateNaissance())))?></p>
                    <p class="card-text">Date de deces : <?php if (htmlspecialchars($dog->getDateDeces()) <> "0000-00-00") {
                        echo date('d/m/Y',strtotime(htmlspecialchars($dog->getDateDeces()))); } ?></p>
                    <p class="card-text">Taille : <?= $dog->getTaille()?> cm</p>
                    <p class="card-text">Poids : <?= $dog->getPoids()?> kg</p>
                    <?php  $manager = new PropietairesManager;
                            $propietaire = $manager->getPropietaire(intval($dog->getIdPropietaire()));
                    ?>
                    <p class="card-text">Propietaire : <?= $propietaire->getNom()." ".$propietaire->getPrenom()?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>
</div> 